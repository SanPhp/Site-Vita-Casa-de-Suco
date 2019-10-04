<!doctype html>
<html>
<head>
<meta charset="utf-8">
<meta name="author" content="http://www.hrsweb.com.br"> 
<meta name="robots" content="all">
<meta name="distribution" content="Global">
<meta name="service" content="Casa de Sucos em Arapongas">

<meta name="description" content="Casa de Sucos em Arapongas">

<meta name="keywords" content="Casa, De, Sucos, Arapongas, Paraná, Brasil">


<link rel="stylesheet" type="text/css" href="css/style.css">

<script language="JavaScript" src="vali_form/jquery-1.10.2.min.js" type="text/javascript"></script>
<script language="JavaScript" src="vali_form/jquery.validate.js" type="text/javascript"></script>


<link rel="shortcut icon" type="image/png" href="estru/favicon.png">
<link rel="icon" href="estru/favicon.png" sizes="32x32">
<link rel="icon" href="estru/favicon.ico" sizes="32x32">

<title><?php echo $title; ?></title>

<script type="text/javascript">

  $(document).ready( function() {
				
                $("#formContato").validate({
                    // Define as regras
                    rules:{
                        txtNome:{
                            // será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 2
                        },
						   txtFone:{
                            // será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 2
                        },
						
                        txtEmail:{
                            // será obrigatorio (required) e tem que ser um e-mail válido (email)
                            required: true, email: true
                        },
						
						  txtAssunto:{
                            // será obrigatorio (required) e tem que ser um e-mail válido (email)
                            required: true,
                        },
						
                        txtMensagem:{
                            // será obrigatorio (required) e terá tamanho minimo (minLength)
                            required: true, minlength: 5
                        }
                    },
                    // Mensagens de erro para cada regra
                    messages:{
                        txtNome:{
                            required: "Digite o seu nome.",
                            minlength: "O seu nome deve conter, no mínimo 2 caracteres."
                        },
						
						 txtFone:{
                            required: "Digite o seu Telefone.",
							 minlength: ""
                        },
						
                        txtEmail:{
                            required: "Digite o seu e-mail para contato.",
                            email: "Digite um e-mail válido."
                        },
						
						 txtAssunto:{
                            required: "Campo Assunto Vazio.",
                        },
						
                       txtMensagem:{
                            required: "Digite a sua mensagem.",
                            minlength: "A sua mensagem deve conter, no mínimo 5 caracteres."
                        }
                    }
                });
            });
        </script>



<!--[if lt IE 9]>
   <script>
      document.createElement('header');
      document.createElement('nav');
      document.createElement('section');
      document.createElement('article');
      document.createElement('aside');
      document.createElement('footer');
   </script>
<![endif]-->

<!--[if lt IE 9]>
 <style type="text/css">
 
 header, nav, section, article, aside, footer {
   display:block;
}
 
</style
<![endif]-->

</head>