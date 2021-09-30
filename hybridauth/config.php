<?php

/**
 * HybridAuth
 * http://hybridauth.sourceforge.net | http://github.com/hybridauth/hybridauth
 * (c) 2009-2015, HybridAuth authors | http://hybridauth.sourceforge.net/licenses.html
 */
// ----------------------------------------------------------------------------------------
//	HybridAuth Config file: http://hybridauth.sourceforge.net/userguide/Configuration.html
// ----------------------------------------------------------------------------------------

return array(
    "base_url" => "http://localhost:8090/auth/hybridauth/index.php",
    
    "providers" => array(
        // openid providers
        "OpenID" => array(
            "enabled" => true,
        ),
        "Yahoo" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => ""),
        ),
        "AOL" => array(
            "enabled" => true,
        ),
        // 410014537331-fldt7s0slrvocksoj05l0h0v5cql1ep5.apps.googleusercontent.com
        // eQFZZABwBNjLNUEZJVhtNZ3Y


        // 410014537331-0vc5gikhdo9s70e8j79b4vjgtnm01l9t.apps.googleusercontent.com
        // l9lzkGQOCL9JLHXKgelrtSEZ
// http://localhost:8080


        "Google" => array(
            "enabled" => true,
            "keys" => array("id" => "293776183700-ke7i4sr3ctns9o9g5h4hteo8ebs356al.apps.googleusercontent.com", "secret" => "-dJyLvIwjD1eurJEODxI1UEC"),
                "access_type"     => "offline",   // optional
          "approval_prompt" => "force", 
             // optional
         // "scope"=>"profile",
          "redirect_uri"=>"http://localhost:8090/auth/hybridauth/?hauth.done=Google"
          // http://localhost:8090/auth/hybridauth/?hauth.done=Google
          //  'redirect_uri'=>"www.google.com"
        ),
        "Facebook" => array(
            "enabled" => true,
            "keys" => array("id" => "293776183700-ke7i4sr3ctns9o9g5h4hteo8ebs356al.apps.googleusercontent.com", "secret" => "dJyLvIwjD1eurJEODxI1UEC"),
            "trustForwarded" => false,
        ),
        "Twitter" => array(
            "enabled" => true,
            "keys" => array("key" => "", "secret" => ""),
            "includeEmail" => false,
        ),
        // windows live
        "Live" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => ""),
        ),
        "LinkedIn" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => "", "scope" => ["r_liteprofile", "r_emailaddress", "w_member_social"]),
            "fields" => array(),
        ),
        "Foursquare" => array(
            "enabled" => true,
            "keys" => array("id" => "", "secret" => ""),
        ),
    ),
    // If you want to enable logging, set 'debug_mode' to true.
    // You can also set it to
    // - "error" To log only error messages. Useful in production
    // - "info" To log info and error messages (ignore debug messages)
    "debug_mode" => false,
    // Path to file writable by the web server. Required if 'debug_mode' is not false
    "debug_file" => "",
);
