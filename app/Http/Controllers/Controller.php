<?php

namespace App\Http\Controllers;

use Illuminate\Foundation\Auth\Access\AuthorizesRequests;
use Illuminate\Foundation\Bus\DispatchesJobs;
use Illuminate\Foundation\Validation\ValidatesRequests;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

use Illuminate\Routing\Controller as BaseController;

use App\Models\Indexpage;
use App\Models\Corpodocente;
use App\Models\User;
use App\Models\Student;

class Controller extends BaseController
{
    use AuthorizesRequests, DispatchesJobs, ValidatesRequests;

    public function login ()
    {
        $index = Indexpage::all();
        return view('login', compact('index'));
    }

    public function auth(Request $request)
    {
        $credenciais = $request->validate([   //Associa os dados inseridos à variável $credenciais
            'email' => ['required', 'email'], //Verifica se o email foi inserido e se é válido em formato de email - Ex: alguem@gmail.com
            'password' => ['required'],       //Verifica se a senha foi inserida
        ], [
            'email.required' => 'Inserir o email é obrigatório.',  //Se email não inserido, exibir mensagem
            'email.email' => 'O email inserido é inválido.',       //Se email inserido for em formato inválido, exibir mensagem
            'password.required' => "O campo senha é obrigatório.", //Se senha não inserida, exibir mensagem
        ]);

        if(auth::attempt($credenciais)){
            $request->session()->regenerate();
            return redirect()->intended('dashboard'); //Se confirmado, redireciona para o painel principal do sistema
        } else {
            return redirect()->back()->with('erro', 'Usuário ou senha não conferem.'); //Se usuário e/ou senha não forem iguais aos do banco de dados, exibir mensagem
        }
    }

    public function destroy(Request $request)
    {
        Auth::logout();
        $request->session()->invalidate();
        $request->session()->regenerateToken();
        return redirect(Route('login.form'))->with('success', 'Você saiu da sua conta com sucesso.');

    }

    public function insta ()
    {
        $index = Indexpage::all();
        return view('insta', compact('index'));
    }

    public function loginedit(Request $request)
    {
        
        if(empty($request->newpassword) || empty($request->newpassword_repeat))
        {
            return redirect()->back()->with('erro', 'Campo "Nova Senha" e "Repetir Nova Senha" não podem ficar vazios');
        }
        if($request->newpassword == $request->newpassword_repeat)
        {   
            if($request->email != null)
            {
                $password = Hash::make($request->newpassword);
                $user = User::where('email', '=', Auth::user()->email)->update
            ([
                'email'=>$request->email,
                'password'=>$password,
            ]);
            return redirect()->back()->with('success', "Alterações salvas com sucesso!!!");
            }
        }
        return redirect()->back()->with('erro', 'Campo "Nova Senha" e "Repetir Nova Senha" não são iguais');
    }

    public function dashboard ()
    {
        $index = Indexpage::all();
        return view('admin.dashboard', compact('index'));
    }

    public function corpodocente ()
    {
        $corpodocente = Corpodocente::all();
        $index = Indexpage::all();
        return view('corpodocente', compact('corpodocente', 'index'));
    }

    public function corpodocenteedit ()
    {
        $corpodocente = Corpodocente::all();
        $index = Indexpage::all();
        return view('admin.corpodocenteedit', compact('corpodocente', 'index'));
    }

    public function corpodocenteedit_id (Request $request)
    {
        $corpodocente = Corpodocente::where('id', '=', $request->id)->get();
        $index = Indexpage::all();
        return view('admin.corpodocenteedit_id', compact('corpodocente', 'index'));
    }

    public function corpodocenteedit_update(Request $request)
    {

        if($request->hasFile('perfil_photo') && $request->file('perfil_photo')->isValid())
        {
            $imageName = "$request->id"."$request->name".".webp";
            $request->perfil_photo->move(public_path('img/corpodocente/'), $imageName);
        }

        //////////////////////////////////////

        $corpodocente = Corpodocente::where('id', '=', $request->id)->update
            ([
                'perfil_photo'=>$imageName,
                'office'=>$request->office,
                'name'=>$request->name,
                'surname'=>$request->surname,
                'paragraph_one'=>$request->paragraph_one,
                'paragraph_two'=>$request->paragraph_two,
                'paragraph_three'=>$request->paragraph_three,
            ]);
            return redirect()->back()->with('success', "Alterações salvas com sucesso!!!");
    }

    public function corpodocenteadicionar()
    {
        $index = Indexpage::all();
        return view('admin.corpodocenteadicionar', compact('index'));
    }

    public function corpodocenteadicionar_create(Request $request)
    {
        if($request->hasFile('perfil_photo') && $request->file('perfil_photo')->isValid())
        {
            if($request->name != null || $request && $request->office != null)
            {
                Corpodocente::create([
                    'office'=>$request->office,
                    'name'=>$request->name,
                    'surname'=>$request->surname,
                    'paragraph_one'=>$request->paragraph_one,
                    'paragraph_two'=>$request->paragraph_two,
                    'paragraph_three'=>$request->paragraph_three,
                ]);

                $corpodocente = Corpodocente::where('office', '=', $request->office)->where('name', '=', $request->name)->get();
                foreach($corpodocente as $dados)
                {
                    $imageName = "$dados->id"."$dados->name".".webp";
                    $request->perfil_photo->move(public_path('img/corpodocente/'), $imageName);
                }

                $corpodocente = Corpodocente::where('office', '=', $request->office)->where('name', '=', $request->name)->update
                ([
                    'perfil_photo'=>$imageName,
                ]);
                return redirect()->back()->with('success', "Docente cadastrado com sucesso!!!"); 
            }
            return redirect()->back()->with('erro', "Nome e Cargo são campos obrigatórios");
        }
        return redirect()->back()->with('erro', "Uma foto é obrigatoria");
    }

    public function boletoaluno()
    {
        $index = Indexpage::all();
        return view('admin.boletoaluno', compact('index'));
    }

    public function boletoaluno_create(Request $request)
    {
        if($request->hasFile('boleto_pdf') && $request->file('boleto_pdf')->isValid())
        {
            $fileNamecomplemente = date('is');
            $fileName = "$request->cpf"."$fileNamecomplemente".".pdf";
            $request->boleto_pdf->move(public_path('doc/boletos/'), $fileName);
            Student::create([
                'name'=>$request->name,
                'surname'=>$request->surname,
                'cpf'=>$request->cpf,
                'boleto'=>$fileName,
                'expiration'=>$request->expiration,
            ]);
            return redirect()->back()->with('success', "Documento cadastrado com sucesso!!!"); 
        }
        return redirect()->back()->with('erro', "O PDF do boleto é obrigatorio");
    }

    public function boletos()
    {
        $index = Indexpage::all();
        return view('aluno.boletos', compact('index'));
    }

    public function boletos_search(Request $request)
    {
        $index = Indexpage::all();
        $boletos = Student::where('cpf', '=', $request->cpf)->get();
        return view('aluno.boletos', compact('index', 'boletos'));
    }

    public function formwapp(Request $request)
    {
        $index = Indexpage::all();
        foreach($index as $dados)
        {
        //Cria array com caracteres não númericos  //Pega os caracteres informados e substitui por ""       //Transforma a variável String em int
        $remove = array('(', ')', ' ', '-');        $wnumber = str_replace($remove, '', $dados->tel_one);   $wnumber = intval($wnumber);
        $whats = "https://api.whatsapp.com/send?phone=5573999889962&text=Ol%C3%A1!%20Gostaria%20de%20fazer%20meu%20cadastro%20no%20curso%20de%20psican%C3%A1lise.%0AMeus%20dados:%0ANome:%20$request->name%20$request->surname%0AE-mai:%20$request->email%0ACPF:%20$request->cpf%0AData%20de%20nascimento:%20$request->birthday";
        }
        return redirect($whats);
    }

    

}
