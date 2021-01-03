<? php

if ( isset ( $ _POST [ 'email' ]) &&! vazio ( $ _POST [ 'email' ])) {

$ nome = adicionalashes ( $ _POST [ 'nome' ]);
$ email = addslashes ( $ _POST [ 'email' ]);
$ assunto = adicionalashes ( $ _POST [ 'assunto' ]);
$ mensagem = addslashes ( $ _POST [ 'mensagem' ]);

$ to = "thallyta180136319@gmail.com" ;
$ subject = "Contato - DRILL MAXTER" ;
$ body = "Nome:" . $ nome . "\ n" .
        "Email:" . $ email . "\ n" .
        "Assunto:" . $ assunto . "\ n" .
        "Mensagem:" . $ mensagem ;

$ header = "De: comercial@drillmaxter.com.br" . "\ r \ n"
          . "Responder para:" . $ email . "\ r \ n"
          . "X = Mailer: PHP" . phpversion ();

    if ( mail ( $ to , $ subject , $ body , $ header )) {

    echo ( "Email enviado com sucesso!" );

    } else {
        
    echo ( "Email não pode ser enviado" );
 }
}

?>