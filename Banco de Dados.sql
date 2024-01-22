/*!40101 SET @OLD_CHARACTER_SET_CLIENT=@@CHARACTER_SET_CLIENT */;
/*!40101 SET NAMES utf8 */;
/*!50503 SET NAMES utf8mb4 */;
/*!40103 SET @OLD_TIME_ZONE=@@TIME_ZONE */;
/*!40103 SET TIME_ZONE='+00:00' */;
/*!40014 SET @OLD_FOREIGN_KEY_CHECKS=@@FOREIGN_KEY_CHECKS, FOREIGN_KEY_CHECKS=0 */;
/*!40101 SET @OLD_SQL_MODE=@@SQL_MODE, SQL_MODE='NO_AUTO_VALUE_ON_ZERO' */;
/*!40111 SET @OLD_SQL_NOTES=@@SQL_NOTES, SQL_NOTES=0 */;

USE `cetelp89_cetel`;

CREATE TABLE IF NOT EXISTS `clientes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `fantasia` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `rsocial` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cpf` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cnpj` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `inscestadual` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `classe` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `telefone` bigint NOT NULL,
  `cep` int DEFAULT NULL,
  `ruaav` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `complemento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `cidade` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `estado` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setcolor` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `setdarkmode` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `clientes_email_unique` (`email`),
  UNIQUE KEY `clientes_cpf_unique` (`cpf`),
  UNIQUE KEY `clientes_cnpj_unique` (`cnpj`)
) ENGINE=InnoDB AUTO_INCREMENT=4 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `clientes` (`id`, `name`, `surname`, `fantasia`, `rsocial`, `email`, `cpf`, `cnpj`, `inscestadual`, `classe`, `telefone`, `cep`, `ruaav`, `complemento`, `cidade`, `estado`, `tipo`, `responsavel`, `email_verified_at`, `password`, `setcolor`, `setdarkmode`, `created_at`, `updated_at`) VALUES
	(1, 'Petry', 'Cintra Amaral', NULL, NULL, 'petry@os.com', NULL, NULL, NULL, NULL, 73998338653, 45710000, 'Rua Silvino Gomes N°70', 'Casa', 'Itororó', 'BA', 'PF', 'Julie Hevellyn de Oliveira', NULL, '202cb962ac59075b964b07152d234b70', NULL, NULL, '2023-11-24 22:28:05', '2023-11-29 03:33:38'),
	(2, 'Adelson', 'Marques dos Santos', 'Softsky Informática', 'Adelson Marques dos Santos 000.XYZ', 'del@os.com', NULL, '00123658000155', NULL, NULL, 73988888888, 45710000, 'Av Manoel Novais 28A', 'Loja Informática', 'Itororó', 'BA', 'PJ', 'Julie Hevellyn de Oliveira', NULL, '202cb962ac59075b964b07152d234b70', NULL, NULL, '2023-11-25 00:15:10', '2023-11-25 00:30:33'),
	(3, 'Dulce', 'Cintra Amaral', NULL, NULL, NULL, NULL, NULL, NULL, NULL, 73998338653, NULL, NULL, NULL, NULL, NULL, 'PJ', 'Julie Hevellyn de Oliveira', NULL, '202cb962ac59075b964b07152d234b70', NULL, NULL, '2023-11-25 00:24:31', '2023-11-25 00:24:31');

CREATE TABLE IF NOT EXISTS `corpodocentes` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `office` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `surname` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `perfil_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph_one` varchar(2000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph_two` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `paragraph_three` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=21 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `corpodocentes` (`id`, `office`, `name`, `surname`, `perfil_photo`, `paragraph_one`, `paragraph_two`, `paragraph_three`, `created_at`, `updated_at`) VALUES
	(1, 'Doutor', 'Daniel', 'Barbosa de Melo', '1Daniel.webp', 'Bacharel em Teologia: Seminário Teológico Batista do Norte do Brasil (Convalidado pela FBB). Pós-Graduação Lato Sensu em Psicanálise Clínica: FASSEM (Faculdade Assembleiana de Brasília).', 'Mestre em Psicanálise Clínica: Fatefama (Faculdade Teológica de Macapá). Doutorado em Psicanálise Clínica: Fatecba (Faculdade Teológica e Cultural da Bahia). Curso: Terapia de Familiar e de Casais. Hipnose Clássica e Clínica: Instituto Lucas Naves. Master (Mestrado) em Hipnose Clínica: Instituto Lucas Naves. Hipnose no Emagrecimento – Instituto Free Life. PNL Practitioner – Do Básico ao Avançado – Instituto Tera. Desfio 30 dias de Emagrecimento – Gládia Bernard', 'Cursos de Terapia Online – Lucianno Araújo; Psicossomática; Fundamentos da Neurociência; Coaching.', '2024-01-07 19:25:42', '2024-01-11 01:11:37'),
	(2, 'Psicanalista clinico', 'Ailton', 'Xavier dos Santos Júnior', '2ailton.webp', 'Bacharel em Teologia: Seminário Teológico Batista do Nordeste (Convalidado pela FBB). Filosofia pela Faculdade Batista Brasileira. Pós-Graduação Lato Sensu em Psicanálise Clínica pela Sociedade Psicanalítica de Orientação Contemporânea Brasileira. Hipnose Clássica e Clínica: Instituto Lucas Naves. Master (Mestrado) em Hipnose Clínica: Instituto Lucas Naves', NULL, NULL, '2024-01-07 19:30:51', '2024-01-07 19:30:52'),
	(3, 'Mestre', 'Polline', 'Almeida de Oliveira', '3polline.webp', 'Mestre em Ensino e Relações Étnico Raciais pela Universidade Federal do Sul da Bahia – UFSB e professora efetiva de História da Secretaria de Educação do Estado da Bahia. É especialista em História do Brasil pela UESC – Universidade Estadual de Santa Cruz (2017), em Psicanálise Clínica pelo CETEL – Centro de Estudos Teológicos Logos (2014) e em Meio Ambiente e Desenvolvimento pela UESB (2006). Possui graduação em Comunicação Social (Jornalismo) pela UESB – Universidade Estadual do Sudoeste da Bahia (2004) e em Licenciatura em História pela UNIUBE – Universidade de Uberaba (2017). Estuda as histórias, vivências, questões identitárias e práticas educativas desenvolvidas em Comunidades Quilombolas.', NULL, NULL, '2024-01-07 19:35:31', '2024-01-07 19:35:31'),
	(4, 'Psicanalista Clínico', 'Thiago', 'Santos Ferreira', '4thiago.webp', 'Graduado em Letras Vernáculas pela Universidade Estadual do Sudoeste da Bahia. Psicanalista Clínico pela Sociedade Baiana de Estudos Psicanalíticos. Psicanalista Didata pela Sociedade Baiana de Estudos Psicanalíticos.', NULL, NULL, '2024-01-07 19:36:38', '2024-01-07 19:36:38'),
	(5, 'Mestranda', 'Marta', 'Cristina Sampaio Barbosa', '5marta.webp', 'Graduação em Letras e respectivas Literaturas. Psicanálise Clínica. Pós Graduada em: Psicopedagoga Clínica e Institucional, Neuropedagogia e Neuropsicanálise, Mestranda em Psicanálise Clínica.  Curso de Libras; Cursos das editoras – Moderna, Construir e Spione sobre: (autismo, TDAH, dislexia e aspeger); Cursos na UESB: Brinquedista, Histórias na Educação Infantil, Literatura Infanto Juvenil e Educação Ambiental; Curso Montessoriano; Curso sobre Autismo: da teoria à prática. Curso no Ciep em Belo Horizonte – MG: Neuropsicológica e intervenções Psicopedagógicas. Programação Neurolinguística. Hipnoterapia.', NULL, NULL, '2024-01-07 19:38:23', '2024-01-07 19:38:23'),
	(6, 'Mestre', 'Josmar', 'Barreto Duarte', '6josmar.webp', 'Biólogo formado pela Universidade Estadual do Sudoeste da Bahia – Campus de Jequié-BA. Especialista em Metodologia do Ensino Superior pela PUC-MG; Teoria Psicanalítica e Sexualidade humana pela Faculdade Redentor-RJ; Psicologia Educacional pela FacSul e Psicanálista Clínico e Didata formado pelo Centro de Ensino e Pesquisa Psicanalítica –RJ e SPOB-RJ. Hipnoterapeuta. Mestre em Educação pela Universidade Federal da Bahia-UFBA – Salvador/BA. Doutor em Psicanálise Aplicada a Saúde e Educação (doutorado livre); Doutorando em Psicologia –Universidad de Ciencias Empresariales y Sociales – Uces –BsAs –Argentina. Professor Assistente da Universidade Estadual do Sudoeste da Bahia –UESB.', NULL, NULL, '2024-01-07 19:38:50', '2024-01-07 19:38:50'),
	(7, 'Doutora', 'Wilza', 'Karla Leão Macedo', '7wilza.webp', 'Doutoranda em Letras – Universidade de Santa Cruz do Sul – UNISC/RS (2017-2021). Professora substituta em Linguagem da Universidade Federal do Sul da Bahia (UFSB/IHAC) (2017-2019). Mestra em LETRAS pela Universidade Estadual de Santa Cruz – UESC/BA (2011). Mestra em Psicanálise – ABMP/DF (2016). Cursou, como aluna especial no Doutorado em Letras (UFBA/PPGLINC), as disciplina Semântica Lexical (2015.1) e Tópicos em Diacronia (2015.2), e cursou, como aluna especial no Doutorado em Educação (FACED/UFBA), as disciplinas Política e Educação (2014.1) e Currículo e Formação de Professor (2014.2). Esteve Secretária de Educação do município de Itororó/BA (2013 a junho 2015). Foi professora de Linguística Textual e de Estágio Supervisionado II, e orientadora de TCC na Universidade Estadual de Santa Cruz, bolsista conveniada à Plataforma Paulo Freire (PARFOR/CAPES). Foi tutora no curso de Letras UAB/UESC. É surpervisora regional do PRONATEC. Graduada em Letras (UESC) e em História (PUC-RIO). Psicanalista Clínica CRPA nº 256115-15/BR. Especialista em Metodologia do Ensino de Língua Portuguesa e Literatura e em Gestão da Aprendizagem Escolar. Professora de Língua Portuguesa, ensino médio, servidora efetiva da Secretaria de Educação do Estado da Bahia. É Life Coach certificada pela Sociedade Brasileira de Coaching – SBC. Palestrante nas áreas de Coaching, Psicanálise e Educação. Aplicadora das técnicas da PNL, certificação Internacional Practitioner em PNL, IFAZ, INCTA (2019). Practitioner em Programação Neurolinguística modelo sistêmico, certificação pelo Instituto de Formação de Treinadores (IFT), 2020.', NULL, NULL, '2024-01-07 19:40:34', '2024-01-07 19:40:35'),
	(8, 'Mestranda', 'Maria', 'Emília pinheiro de Lima', '8maria.webp', 'Mestranda em Psicanálise. Especialista em Metodologia do Ensino Superior e Gestão Cooperativista.', NULL, NULL, '2024-01-07 19:40:34', '2024-01-07 19:40:35');

CREATE TABLE IF NOT EXISTS `cursopresencials` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `question` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=16 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `cursopresencials` (`id`, `question`, `description`, `created_at`, `updated_at`) VALUES
	(1, 'Mas o que é Psicanálise?', 'Psicanálise é a ciência/arte que objetiva a transposição inconsciente/consciente. Considerada como a forma de tratamento das neuroses atualmente denominadas “psiconeuroses” tem por norma seu tratamento através de: a) Processo de Livre Associação de Idéias; b) Interpretação dos Sonhos; c) Observação e Análise do fenômeno da Transferência; d) Análise dos Atos Falhos (Parapraxias) e da Resistência.', '2024-01-08 01:57:37', '2024-01-11 04:16:19'),
	(2, 'Quanto tempo de curso?', 'O curso está distribuído em 24 módulos, sendo um encontro por mês presencial, trabalhos extra aula, indicações de leituras e pesquisas. Num período total de 2 anos.', '2024-01-08 01:57:39', '2024-01-08 01:57:39'),
	(3, 'Sua abrangência limita-se', 'Ao método de investigação do inconsciente; À psicoterapia baseada nesse método e; Ao conjunto de teorias e normas em que são sistematizados os dados introduzidos pelo método psicanalítico. No dizer de Freud, “é uma profissão de pessoas leigas que curam almas, sem que necessariamente sejam médicos ou sacerdotes”.', '2024-01-08 01:57:40', '2024-01-08 01:57:40'),
	(4, 'O que faz o Psicanalista?', 'Há uma grande necessidade de psicanalistas para orientar as pessoas na solução de seus problemas existenciais, tais como: fobias, ansiedades, depressões, obsessões, impulsos auto e heteroagressivos, angústias e crises de toda ordem. O profissional de Psicanálise ajudará a sociedade a ficar mais humana e a vida a ter mais sentido!', '2024-01-08 01:57:40', '2024-01-08 01:57:41'),
	(5, 'Quem poderá fazer o curso?', 'Médicos, Professores, Engenheiros, Odontólogos, Advogados, Assistentes Sociais, Pedagogos, Teólogos, Enfermeiros, Pastores, Padres, Psicólogos, Contadores, etc. Este curso é dirigido a todos os interessados em adquirir conhecimentos mais profundos em Psicanálise. Aos que querem aprender a dinâmica de seus problemas emocionais e afetivos de acordo com as teorias psicanalíticas, e aos que desejam dedicar-se à Psicanálise como Terapeutas e Clinicar.', '2024-01-08 01:57:41', '2024-01-08 01:57:42'),
	(6, 'Quando o aluno pode iniciar?', 'O interessado faz sua pré-inscrição por meio dos contatos {{ $whats }} aguardando completar sua turma.', '2024-01-08 01:57:54', '2024-01-08 01:57:54'),
	(7, 'Onde o curso acontecerá?', 'O curso acontecerá em sua cidade ou em alguma próxima. Contate-nos para informações de cidades onde o curso está sendo oferecido.', '2024-01-08 01:58:08', '2024-01-08 01:58:08'),
	(8, 'Requisitos', 'Para matricular-se no Curso de Psicanálise Clínica o aluno deverá ter concluído um Curso Superior estar cursando.', '2024-01-08 01:58:19', '2024-01-08 01:58:19'),
	(9, 'Grau conferido', 'A CETEL conferirá o grau de Psicanalista Clínico.', '2024-01-08 01:58:31', '2024-01-08 01:58:32'),
	(10, 'Documentação exigida', 'Cópia do Diploma ou Certificado do 3o Grau; Duas fotos 3/4; Cópia de Identidade e CPF;', '2024-01-08 01:59:50', '2024-01-08 01:59:50'),
	(11, 'Investimento', 'O valor é de R$ 290,00* por módulo. No curso presencial, o valor da mensalidade pode variar de cidade pra cidade. Consulte o preço para a sua localidade.', '2024-01-08 02:00:48', '2024-01-11 05:54:12'),
	(12, 'Análise didata', 'Apresentar a Certidão de Análise Didata, assinada por um Psicanalista Clínico de sua cidade, comprovando que fez no mínimo 30 (trinta) sessões analíticas.', '2024-01-08 02:00:49', '2024-01-08 02:00:49'),
	(13, 'Estágio', 'O aluno receberá da CETEL partir do 18º Módulo e Certidão de Análise Didata, uma autorização por escrito para atender pacientes-piloto em sua cidade, tendo o acompanhamento de um Analista. A CETEL disponibilizará na ocasião o roteiro do Estágio.', '2024-01-08 02:01:00', '2024-01-08 02:01:01'),
	(14, 'Conclusão', 'O formando deverá apresentar até o final do Curso o seu TCC (Trabalho de Conclusão de Curso). Este pode ser em forma de artigo, monografia, resumo ou estudo de casos.', '2024-01-08 02:01:11', '2024-01-08 02:01:11'),
	(15, 'Nota para aprovação', 'Exige-se nota mínima sete (7.0), para a aprovação.', '2024-01-08 02:01:11', '2024-01-08 02:01:11');

CREATE TABLE IF NOT EXISTS `failed_jobs` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `uuid` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `connection` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `queue` text COLLATE utf8mb4_unicode_ci NOT NULL,
  `payload` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `exception` longtext COLLATE utf8mb4_unicode_ci NOT NULL,
  `failed_at` timestamp NOT NULL DEFAULT CURRENT_TIMESTAMP,
  PRIMARY KEY (`id`),
  UNIQUE KEY `failed_jobs_uuid_unique` (`uuid`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `grades` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `title` text COLLATE utf8mb4_unicode_ci,
  `description` text COLLATE utf8mb4_unicode_ci,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=27 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `grades` (`id`, `title`, `description`, `created_at`, `updated_at`) VALUES
	(1, '01 - Breve História da Psicanálise', 'A origem da psicanálise, psicanálise como ciência, campos das psicoterapias. Introdução à técnica psicanalítica e principais conceitos. As ideias básicas da psicologia humana e seu desenvolvimento sob uma perspectiva psicanalítica. Nascimento da Psicanálise: história e contexto. Primeiros psicanalistas: convergências e divergências. Psiconeuroses de defesa: do trauma ao conflito psíquico. Interpretação dos Sonhos.  Primeira tópica do aparelho psíquico. Formações do inconsciente. Primeira tópica pulsional.', '2024-01-11 02:09:39', '2024-01-11 02:09:40'),
	(2, '02 - Teorias Psicanalíticas I e II', 'Estudo dos primeiros estudos desenvolvidos por Freud, em como sua relação com as concepções vigentes acerca do ser humano, ressaltando o impacto provocado pela Psicanálise na filosofia, na ciência, na religião da época, bem como suas implicações na contemporaneidade. Capacitação do discente para atuar nas áreas clínica e de pesquisa e em abordagens interdisciplinares e trabalho em instituições.', '2024-01-11 02:09:41', '2024-01-11 02:09:41'),
	(3, '03 - Teorias da Personalidade', 'Organização, resumo e apresentação das principais Teorias da Personalidade na perspectiva psicanalítica, e suas contribuições para o aprofundamento do conhecimento e compreensão da personalidade do sujeito na atualidade. Descrição de uma série de características que foram tratadas como componentes da personalidade. Introdução as diferentes teorias que tentam explicar o desenvolvimento e a estrutura da personalidade.  Análise e comparação das teorias da personalidade com destaque para as diferenças e semelhanças. Observação dos fenômenos inerentes da personalidade no seting psicanalítico.', '2024-01-11 02:09:43', '2024-01-11 02:09:42'),
	(4, '04 - Fundamentos da Técnica Psicanalítica I', 'Organização, resumo e apresentação das principais Teorias da Personalidade na perspectiva psicanalítica, e suas contribuições para o aprofundamento do conhecimento e compreensão da personalidade do sujeito na atualidade. Descrição de uma série de características que foram tratadas como componentes da personalidade. Introdução as diferentes teorias que tentam explicar o desenvolvimento e a estrutura da personalidade.  Análise e comparação das teorias da personalidade com destaque para as diferenças e semelhanças. Observação dos fenômenos inerentes da personalidade no seting psicanalítico.', '2024-01-11 02:34:23', '2024-01-11 02:34:24'),
	(5, '05 - Fundamentos da Técnica Psicanalítica II', 'O tripé da formação psicanalítica. Forças que são favoráveis e as que se opõem ao bom andamento do processo analítico. Etapas da Análise. Vicissitudes do processo psicanalítico. Atividade e passividade na análise. A autoanálise. O processo didático de estágio. Pontos para elaboração do relatório do estágio. A supervisão Psicanalítica. Fatores que influenciam no processo de supervisão. Funções do supervisor. O processo de luto durante a  supervisão psicanalítica. Psicoterapia Psicanalítica Integrada. Similaridades das técnicas: Psicoterapia Breve de Orientação Psicanalítica e Análise Tradicional. O credenciamento.', '2024-01-11 02:34:24', '2024-01-11 02:34:25'),
	(6, '06 - Interpretação de Sonhos', 'Com a demanda crescente de carências e desequilíbrio emocional surge a necessidade de que o profissional da psicanálise conheça sobre os sonhos: seus símbolos e seus significados.  Concepção freudiana: Sonho é “um produto da atividade do inconsciente e que tem sempre um sentido intencional, a saber: a realização ou a tentativa de realização – mais ou menos dissimulada, de uma tendência reprimida”. “Os Sonhos são a estrada real que conduz ao inconsciente” escreveu Freud. O grande mérito de Freud foi, por meio da análise dos sonhos, apontar para a existência do inconsciente. O Sonho é, portanto, a “estrada real do psiquismo”. Freud entendia que o psicanalista, partindo da informação que lhe presta o paciente (conteúdo onírico manifesto), chegaria a obter o conteúdo latente ou “idéias do sonho. As manifestações oníricas são o mais rico caminho de acesso ao inconsciente e revelam muito a respeito do indivíduo. A evolução da ciência comprova que os sonhos são essenciais para o equilíbrio do organismo e fortalece a teoria psicanalítica nascida há um século.', '2024-01-11 02:34:28', '2024-01-11 02:34:27'),
	(7, '07 - Relações entre Psicanálise e Hipnose', 'Métodos e Investigação em psicanálise: Hipnose, Sugestão, Associação Livre, Neurose de Transferência, Experiência Emocional. Fatores que influenciam no processo de terapia. Doenças da Alma. História da hipnose na Psicanálise. A hipnose no processo psicanalítico.  Noções básicas sobre hipnose e o processo de hipnoterapia. Modificações produzidas pela análise. Modificações  produzidas pela hipnoterapia. Tipos de hipnose. Hipnose Clínica. Tipos de procedimentos de sugestibilidade.  Ressignificação . Reprogramação Mental.', '2024-01-11 02:34:30', '2024-01-11 02:34:30'),
	(8, '08 - Clínica Psicossomática', 'Compreensão dos fenômenos do desenvolvimento humano, normal e patológico, ligados ao corpo biológico e as suas relações com a psique, mente e o meio ambiente. Estudo das bases fisiológicas do estresse e de seus mecanismos de adaptação. Entendimento de como esse fenômeno psicossomático interfere nas relalções intra e interpessoais.', '2024-01-11 02:34:30', '2024-01-11 02:34:31'),
	(9, '09 - Terapia Familiar', 'Transformação do conceito de família ao longo da história, as diferentes abordagens de terapia familiar, a relação família e saúde mental, questões práticas na terapia familiar.', '2024-01-11 02:34:31', '2024-01-11 02:34:31'),
	(10, '10 - Transtornos Psicológicos', 'Conhecimento do que são Transtornos; Transtornos neuróticos; Transtornos de ansiedade; Transtorno obsessivo-compulsivo; Transtornos relacionados ao stress; Transtornos Dissociativos; Transtornos de personalidade; Transtornos alimentares; Transtorno do espectro Autista; Transtorno de Déficit de  Atenção e Hiperatividade; Outros transtornos da infância e adolescência.', '2024-01-11 02:34:32', '2024-01-11 02:34:32'),
	(11, '11 - Neurose e Psicose', 'Perspectivas teóricas sobre a Clínica das Neuroses e das Psicoses, com base na Psicanálise Freudiana. Evolução do conceito de psicose em Freud: a concepção de defesa como explicativa das psiconeuroses. Diagnóstico diferencial das psicoses: mecanismos psíquicos e estruturais. A perda da realidade na neurose e na psicose. O conceito de projeção. Contribuições de Lacan ao estudo das psicoses: o conceito de foraclusão; as estruturas elementares das psicoses; a psicose e os registros do simbólico, do imaginário e do real. Algumas versões da estrutura psicótica; abordagem diferencial dos diversos tipos de psicose. Abordagem clínica em psicanálise: propostas contemporâneas. O conceito de neurose em Freud. Recalque e destinos dos representantes da pulsão: o afeto e o representante ideativo. A formação de substitutivos, o sintoma e o retorno do recalcado. Os complexos de Édipo e de castração nas neuroses. O recalque nas três formas gerais da neurose: a histeria de angústia e o sintoma fóbico estruturado; a histeria de conversão; a neurose obsessiva. A clínica da neurose.', '2024-01-11 02:34:33', '2024-01-11 02:34:33'),
	(12, '12 - Ética e Psicanálise', 'Ética do psicanalista e do paciente. Relação com os colegas. A ética na psicanálise a partir de seus conceitos centrais. O desejo do analista e suas renúncias. Relação com os colegas. Relações com instituições formadoras e sociedade. Ética e a sexualidade. Direitos profissionais e direitos do paciente. Aspectos jurídicos. Código de ética do psicanalista e disciplina. Psicanalista e o sigilo profissional.', '2024-01-11 02:34:33', '2024-01-11 02:34:34'),
	(13, '13 - Complexo de Castração e Fantasia', 'O Complexo de Castração; A Inveja do Pênis; Complexo de édipo e complexo de castração fixação pulsional; Síntese clínica; Esquema do complexo de castração no menino; Esquema do complexo de castração na menina.', '2024-01-11 02:34:36', '2024-01-11 02:34:35'),
	(14, '14 - Programação Neurolinguística e Psicanálise', 'A Comunicação Eficaz;  Os Canais de Comunicação; O que é Programação Neurolinguística (PNL); Técnicas e Estratégias da PNL; Aplicações da PNL;  Ressignificação; Controle emocional.', '2024-01-11 02:34:36', '2024-01-11 02:34:36'),
	(15, '15 - Psicopatologia', 'Em torno do conceito de psicossomática; Aspectos históricos da psicossomática; O processo de somatização. Dores : física, fascial, emocional , da alma…As dores psicossomáticas. Doenças da alma. As estruturas cerebrais na formação das emoções. Relação entre emoções e a dor. O não dito. O segundo cérebro. O fenômeno psicossomático; O desejo de curar-se. Hipocondria e hipocondríacos; O pensamento operatório; Alexitimia; O paciente/cliente psicossomático; Psicanálise e psicossomática. Aspectos terapêuticos em psicossomática.', '2024-01-11 02:34:37', '2024-01-11 02:34:37'),
	(16, '16 - Psicanálise e Linguagem Corporal', 'Este módulo é um convite a trabalhar a linguagem corporal como instrumento do nosso ambiente analítico. Uma gigantesca parte de nossa comunicação se dá pelo não-verbalizado. Assim, na sessão obteremos informações do inconsciente pela associação livre no verbalizado e no não-verbalizado, pois o corpo fala.', '2024-01-11 02:34:38', '2024-01-11 02:34:38'),
	(17, '17 - Psicoterapias Breves', 'A crescente demanda ao profissional de saúde mental pelo domínio da Psicoterapia Breve nos coloca diante da necessidade de uma permanente reflexão sobre a prática clínica, para que esta não se reduza a uma mera aplicação de técnicas. A partir da apresentação e análise crítica dos princípios que norteiam as chamadas Psicoterapias Breves, estaremos oferecendo ao aluno ferramentas teórico-técnicas que lhe possibilitem criar , conduzir intervenções terapêuticas breves condizentes com o projeto clínico de cada situação, levando em conta as especificidades do manejo técnico do atendimento.', '2024-01-11 02:34:39', '2024-01-11 02:34:39'),
	(18, '18 - Sexologia', 'Sexologia é a área do conhecimento que trata do comportamento sexual. É um fenômeno recente, com a atual abordagem datando do final do século XIX. Trata-se de uma área de atuação interdisciplinar, que abrange: – algumas áreas da medicina (andrologia, ginecologia e a anatomia dos órgãos sexuais); – psicologia, sociologia e antropologia do comportamento sexual; – neurociências (o estudo da base da resposta sexual e a complexidade do comportamento sexual); – psiquiatria (parafilias, assim como desordens que levam a inadequações); a epidemiologia das doenças sexualmente transmissíveis (DSTs);   A sexologia também toca questões mais amplas, como o conceito de saúde sexual, aborto, saúde pública, controle de natalidade, abuso sexual, entre outros.   É uma ciência que estuda a sexualidade.', '2024-01-11 02:41:07', '2024-01-11 02:41:08'),
	(19, '19 - Psicanálise e Educação', 'Este módulo aponta que uma das principais contribuições de Freud para a Educação está no conhecimento do desenvolvimento sexual da criança (leia a reportagem sobre educação sexual) e no papel da linguagem. … Mas advertiu que o sofrimento que a Educação infligia aos alunos ao lidar com pulsões e afetos sexuais poderia ser, de certa forma, atenuado. A principal contribuição da psicanálise para o desenvolvimento humano está relacionada com as forças inconscientes que motivam o comportamento humano. Ela procura descrever mudanças qualitativas, cujo objetivo é fazer com que as pessoas compreendam os conflitos emocionais inconscientes', '2024-01-11 02:42:16', '2024-01-11 02:42:18'),
	(20, '20 - Psicanálise Infantil', 'A disciplina visa oferecer ao estudante uma visão dos principais quadros psicopatológicos da infância, bem como das principais modalidades terapêuticas. O aluno deverá conhecer os fundamentos teóricos de algumas técnicas utilizadas no tratamento de crianças.', '2024-01-11 02:42:17', '2024-01-11 02:42:19'),
	(21, '21 - O Inconsciente', 'Conceito de inconsciente de Carl, Gustav Jung. Conceito de inconsciente e pré-consciente de Freud. Estrutura topográfica. Material reprimido e recalcado. Representação/ afetos / ideias Condensação e deslocamento Princípio da homeostase. O comportamento e a influencia do consciente e inconsciente.', '2024-01-11 02:42:21', '2024-01-11 02:42:19'),
	(22, '22 - Primeiras Relações Objetais', 'As Primeiras Relações Objetais:  Abrangendo aspectos normais e patológicos. Diversos estágios do desenvolvimento das suas relações objetais desde a fase Anobjetal até à Carência Total e os Transtornos Psicotóxicos, avançando até à Adolescência e o aparecimento de novas relações. Perpassa pelas contribuições de Melanie Klein e Otto F. Kernberg.', '2024-01-11 02:42:21', '2024-01-11 02:42:19'),
	(23, '23 - Teoria Psicanalítica III', 'O Setting (Enquadre); Resistências; Contra-Resistência; Impasses: Reação Terapêutica Negativa; Transferências; Contratransferência; A Comunicação Não-Verbal na Situação Psicanalítica; O Silêncio na Situação Psicanalítica; A Atividade Interpretativa; As Atuações (Actings).', '2024-01-11 02:42:20', '2024-01-11 02:42:20'),
	(24, '24 - Conceitos Cruciais da Psicanálise', 'Falo; Foraclusão; Identificação em Freud, Lacan e Winnicott; O conceito de identificação em Jacques Lacan; Narcisismo; O supereu freudiano; Sublimação.', '2024-01-11 02:44:20', '2024-01-11 02:44:21'),
	(25, 'Trinta Análises Pessoais', NULL, '2024-01-11 02:44:21', '2024-01-11 02:44:21'),
	(26, 'Cinco Análises de Paciente Piloto', NULL, '2024-01-11 02:44:27', '2024-01-11 02:44:27');

CREATE TABLE IF NOT EXISTS `indexpages` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `logo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `logo_index` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `tel_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `menu_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_four` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `submenu_five` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `insta` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_content` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_photo_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_photo_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `slider_photo_three` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_one_bolder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_one_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_two_bolder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_two_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_three_bolder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_three_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_four_bolder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_four_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_photo_left` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_photo_right` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_subtitle` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_text` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `description_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_paragraph_one` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_paragraph_two` varchar(1000) CHARACTER SET utf8mb4 COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_paragraph_two_bolder` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_footer_title` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_footer_paragraph_one` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_footer_paragraph_two` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_footer_paragraph_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_footer_btn` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `about_footer_photo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `indexpages` (`id`, `logo`, `logo_index`, `email`, `tel_one`, `tel_two`, `menu_one`, `menu_btn`, `submenu_one`, `submenu_two`, `submenu_three`, `submenu_four`, `submenu_five`, `insta`, `slider_title`, `slider_content`, `slider_btn`, `slider_photo_one`, `slider_photo_two`, `slider_photo_three`, `description_one_bolder`, `description_one_text`, `description_two_bolder`, `description_two_text`, `description_three_bolder`, `description_three_text`, `description_four_bolder`, `description_four_text`, `description_photo_left`, `description_photo_right`, `description_title`, `description_subtitle`, `description_text`, `description_btn`, `about_title`, `about_paragraph_one`, `about_paragraph_two`, `about_paragraph_two_bolder`, `about_photo`, `about_footer_title`, `about_footer_paragraph_one`, `about_footer_paragraph_two`, `about_footer_paragraph_btn`, `about_footer_btn`, `about_footer_photo`, `created_at`, `updated_at`) VALUES
	(1, NULL, NULL, 'cetelpsicanalise@gmail.com', '(73) 9 9988-9962', '(73) 9 9966-1407', 'Curso Presencial', 'Realizar Login', 'Inicio', 'Quem Somos', 'Docentes', 'FAQ', 'Contato', 'cetelpsicanalise', 'Formação em Psicanálise', 'Curso Presencial - Inscreva-se na proxima turma.', 'Quero me inscrever', '1.jpg', '2.jpg', '3.jpg', 'Livre Associação', 'de Idéias', 'Interpretação', 'dos Sonhos', 'Observação do', 'Fenômeno da Transferência', 'Analise dos', 'Atos Falhos e da Resistência', 'banner.png', 'banner2.png', 'Matrículas Abertas', 'Vagas abertas para a turma de janeiro de 2024', 'No Brasil e no Mundo a psicanálise é exercida livremente e não é uma profissão regulamentada. Sendo assim, é uma profissão livre, reconhecida pelo Ministério do Trabalho e Emprego.', 'Quero me matricular hoje', 'Sobre Nossa escola', 'Somos uma uma instituição científica, sem finalidade lucrativa, com sede na Praça Castro Alves, 82, Centro, Itororó-BA,  destinada a congregar psicanalistas, pesquisadores do psiquismo humano, formar psicanalistas clínicos didáticos para o exercício da profissão, realizar cursos de especialização e congressos nas suas respectivas áreas de interesse.', 'A CETEL | Centro de Estudos Teológicos logos | tem como missão zelar pela praxis da psicanálise em âmbito nacional, assistir e supervisionar o exercício da prática psicanalítica dos seus membros, promover estudos de formação em Psicanálise e ciências afins, bem como capacitar novos Psicanalistas em todo território nacional para o exercício da profissão de acordo com as disposições legais em vigência, além de  proporcionar a capacitação do profissional Psicanalista nos postulados das doutrinas Freudianas.', 'Nossa Missão:', 'about.png', 'O curso chamou sua atenção?', 'Curso Presencial', 'Inscreva-se na proxima turma. e não deixe a oportunidade ir embora.', NULL, 'Matricule-se agora', 'about2.png', NULL, '2024-01-11 04:56:22');

CREATE TABLE IF NOT EXISTS `inicios` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `migrations` (
  `id` int unsigned NOT NULL AUTO_INCREMENT,
  `migration` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `batch` int NOT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=137 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `migrations` (`id`, `migration`, `batch`) VALUES
	(27, '2023_10_17_014410_create_inicios_table', 1),
	(28, '2023_10_18_041527_create_registros_table', 1),
	(30, '2023_10_26_160240_create_produtos_table', 2),
	(40, '2023_10_26_160240_create_ordens_table', 5),
	(44, '2023_10_26_16024_create_ordems_table', 7),
	(52, '2023_10_31_23545_create_clientes_table', 9),
	(89, '2014_10_12_100000_create_password_reset_tokens_table', 10),
	(92, '2023_10_26_160240_create_ordems_table', 10),
	(93, '2023_10_31_235459_create_clientes_table', 10),
	(94, '2023_11_01_153548_create_servicos_table', 10),
	(97, '2024_01_06_003717_create_indexpages_table', 12),
	(128, '2014_10_12_000000_create_users_table', 13),
	(129, '2014_10_12_100000_create_password_resets_table', 13),
	(130, '2019_08_19_000000_create_failed_jobs_table', 13),
	(131, '2019_12_14_000001_create_personal_access_tokens_table', 13),
	(132, '2023_12_26_005340_create_receitas_table', 13),
	(133, '2024_01_06_003721_create_indexpages_table', 13),
	(134, '2024_01_07_185742_create_corpodocentes_table', 14),
	(135, '2024_01_08_014859_create_cursopresencials_table', 15),
	(136, '2024_01_11_020514_create_grades_table', 16);

CREATE TABLE IF NOT EXISTS `ordems` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tipo` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `protocolo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `equipamento` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `servico` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `valor` double(8,2) DEFAULT NULL,
  `prazo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `status` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  `finished_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `ordems_protocolo_unique` (`protocolo`)
) ENGINE=InnoDB AUTO_INCREMENT=34 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `ordems` (`id`, `name`, `tipo`, `protocolo`, `equipamento`, `servico`, `descricao`, `valor`, `prazo`, `status`, `responsavel`, `created_at`, `updated_at`, `finished_at`) VALUES
	(1, 'Petry', 'PF', '2023112419401', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 22:40:31', '2023-11-25 18:26:13', NULL),
	(2, 'Petry', 'PF', '2023112420511', 'Pc Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:51:28', '2023-11-25 16:45:25', NULL),
	(3, 'Petry ', 'PF', '2023112420531', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(4, 'Julie', 'PF', '2023112420532', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(6, 'Julie', 'PF', '1', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(7, 'Julie', 'PF', '2', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(8, 'Petry ', 'PF', '3', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(9, 'Petry ', 'PF', '8', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(10, 'Petry ', 'PF', '9', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(11, 'Julie', 'PF', '10', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(12, 'Julie', 'PF', '11', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(15, 'Julie', 'PF', '12', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(16, 'Petry ', 'PF', '13', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(17, 'Petry ', 'PF', '14', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(18, 'Petry ', 'PF', '15', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(19, 'Julie', 'PF', '16', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(20, 'Julie', 'PF', '17', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(21, 'Julie', 'PF', '18', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(24, 'Petry ', 'PF', '19', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(25, 'Petry ', 'PF', '20', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(30, 'Petry ', 'PF', '21', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-24 23:53:01', '2023-11-24 23:53:01', NULL),
	(31, 'Adelson Marques dos Santos', 'PJ', '2023112520422', 'Smartphone Xiaomi', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-25 23:42:15', '2023-11-25 23:42:15', NULL),
	(32, 'Petry Cintra Amaral', 'PF', '2023112821541', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-29 00:54:49', '2023-11-29 00:54:49', NULL),
	(33, 'Petry Cintra Amaral', 'PF', '2023112821551', 'PC Redragon', 'Formatação', 'Instalação do Windows', 50.00, '1 Dias', 'Em analise/Orçamento', 'Julie Hevellyn de Oliveira', '2023-11-29 00:55:43', '2023-11-29 00:55:43', NULL);

CREATE TABLE IF NOT EXISTS `password_resets` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  KEY `password_resets_email_index` (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `password_reset_tokens` (
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`email`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `personal_access_tokens` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `tokenable_type` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `tokenable_id` bigint unsigned NOT NULL,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `token` varchar(64) COLLATE utf8mb4_unicode_ci NOT NULL,
  `abilities` text COLLATE utf8mb4_unicode_ci,
  `last_used_at` timestamp NULL DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `personal_access_tokens_token_unique` (`token`),
  KEY `personal_access_tokens_tokenable_type_tokenable_id_index` (`tokenable_type`,`tokenable_id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `receitas` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;


CREATE TABLE IF NOT EXISTS `registros` (
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `data` date NOT NULL,
  `entrada` datetime NOT NULL,
  `intervalo` datetime DEFAULT NULL,
  `volta` datetime DEFAULT NULL,
  `final` datetime DEFAULT NULL,
  `controle` int DEFAULT NULL
) ENGINE=InnoDB DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `registros` (`name`, `data`, `entrada`, `intervalo`, `volta`, `final`, `controle`) VALUES
	('Julie Hevellyn de Oliveira', '2023-10-17', '2023-10-17 10:22:13', '2023-10-18 10:56:17', '2023-10-17 19:46:45', '2023-10-17 19:46:45', 4),
	('Julie Hevellyn de Oliveira', '2023-10-16', '2023-10-16 10:22:16', '2023-10-18 10:56:17', '2023-10-16 19:46:43', '2023-10-16 19:46:44', 4),
	('Julie Hevellyn de Oliveira', '2023-10-18', '2023-10-18 22:10:16', '2023-10-18 22:10:28', '2023-10-18 22:17:32', '2023-10-18 22:17:37', 4),
	('Petry Cintra Amaral', '2023-10-19', '2023-10-19 21:10:17', '2023-10-19 21:10:19', '2023-10-19 21:10:20', '2023-10-19 21:10:21', 4),
	('Petry Cintra Amaral', '2023-10-20', '2023-10-20 21:57:27', '2023-10-20 21:57:29', '2023-10-20 21:57:30', '2023-10-20 21:57:31', 4),
	('Petry Cintra Amaral', '2023-10-21', '2023-10-21 22:35:49', '2023-10-21 22:35:55', '2023-10-21 22:35:56', '2023-10-21 22:35:58', 4);

CREATE TABLE IF NOT EXISTS `servicos` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `descricao` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `valor` double(8,2) NOT NULL,
  `prazo` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `responsavel` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`)
) ENGINE=InnoDB AUTO_INCREMENT=3 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `servicos` (`id`, `name`, `descricao`, `valor`, `prazo`, `responsavel`, `created_at`, `updated_at`) VALUES
	(1, 'Formatação', 'Instalação do Windows', 50.00, '1', 'Julie Hevellyn de Oliveira', '2023-11-24 22:34:04', '2023-11-25 01:20:23'),
	(2, 'Formatação com backup', 'Instalação do Windows Salvando os arquivos', 70.00, '2', 'Julie Hevellyn de Oliveira', '2023-11-25 01:23:07', '2023-11-25 01:23:07');

CREATE TABLE IF NOT EXISTS `users` (
  `id` bigint unsigned NOT NULL AUTO_INCREMENT,
  `name` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `email_verified_at` timestamp NULL DEFAULT NULL,
  `password` varchar(255) COLLATE utf8mb4_unicode_ci NOT NULL,
  `remember_token` varchar(100) COLLATE utf8mb4_unicode_ci DEFAULT NULL,
  `created_at` timestamp NULL DEFAULT NULL,
  `updated_at` timestamp NULL DEFAULT NULL,
  PRIMARY KEY (`id`),
  UNIQUE KEY `users_email_unique` (`email`)
) ENGINE=InnoDB AUTO_INCREMENT=2 DEFAULT CHARSET=utf8mb4 COLLATE=utf8mb4_unicode_ci;

REPLACE INTO `users` (`id`, `name`, `email`, `email_verified_at`, `password`, `remember_token`, `created_at`, `updated_at`) VALUES
	(1, 'Cetel', 'adm@cetelpsic.com.br', '2024-01-07 23:40:32', '$2y$10$kQLzE75DkwTkcL977MzC/upt8i61NQO2Rb9zYOIqi0ekUWcpTo/AG', NULL, '2024-01-07 23:40:33', '2024-01-10 02:23:45');

/*!40103 SET TIME_ZONE=IFNULL(@OLD_TIME_ZONE, 'system') */;
/*!40101 SET SQL_MODE=IFNULL(@OLD_SQL_MODE, '') */;
/*!40014 SET FOREIGN_KEY_CHECKS=IFNULL(@OLD_FOREIGN_KEY_CHECKS, 1) */;
/*!40101 SET CHARACTER_SET_CLIENT=@OLD_CHARACTER_SET_CLIENT */;
/*!40111 SET SQL_NOTES=IFNULL(@OLD_SQL_NOTES, 1) */;
