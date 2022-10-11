<?php

    /**
     * Funkcja wordwrap(string,width,break,cut)
     * 
     */

    $tekst = <<<TX
        wordwrap(string,width,break,cut)
     
        Syntax
     
            * string	
                Required. Specifies the string to break up into lines
            * width	
                Optional. Specifies the maximum line width. Default is 75 
            * break	
                Optional. Specifies the characters to use as break. Default is "\n"
            * cut	
                Optional. Specifies whether words longer than the specified width should be wrapped:
                    FALSE - Default. No-wrap
                    TRUE - Wrap
            
                    http://www.reallylong.link/rll/YOGG0tC1X50/02HVDi5rLhTBcYiDv8Eh9HKI72Jc1XEhFGB86/DZYQI6KL4d_z/3BgHok9RLIaj4LvqfqjsRaMRNGYKMdB5NezOJhjYZuGvRHpeNipjmmb5x8c3F2EdkzvpmFPaaaSXNXqcnORkV/pIDJuPR89GiuAlWqGPi1I4L4T4BXOJO_i4_U_oZ7bbFCroBwl/qqpmXiDWMKWrgDqafTc754Qti0vk/soZyFonbeWsZQGJOMqOntW0KTOrUZ2AV/SgDSeVE8hSobTFrZvhYs6bkWWTdxweBB9LK_8bFJfqydNQvzW/wsrd7RVjZgLWkhLC/2DAtIgCkxZjEpF7rJEPRVWHdMouQrsgVq9hX5dx58PcBXavk1CzgUOTA4C6dPDbahPUEJPDr5MtdOBwg7jTfEwrW2sjbT7m1dT3rlYw3j8xm/7I/SQ_r_ZOtmyXLubutxusD32rcc_xLOXLeOi3/3w/384I53/XU3RwnzL4NJAnO0PDzUZbrcYLgLZK468FC/gFyuaD8Rpa3v47ONqfe80MoVzjq_M2Jk1FJB0lXzcwrvKK5yO7iAK1bvXcl0ogedzXrtpg/It_6XxCtfXJxMp6xbJ93vjYU3sGM9oOIvSXaFKGf7zhfV80xKCbnmNIbs2iyCUGjllPq0HZR86sPLnw98cZX_k2zSFFlIvmWfyYNzmeOAtgJ0s5PemKSROmIOcfUyflImXPk16c1j0yxAvZR3tsso8hqpAJU91RJuP_Fs9aYZyRniuhxmIi9eM0us0S2U/9svU2pcAI1DVhug9DDM4akrBOApB8X4dMfYy5ffL/6A3noeIOyA_sgunaSV6NQpe08wxuokFNoflV04DeHopTv73idFaanfA0jYi3xUQ6R/bPq8Cd6jawFhoMg255sw6nxNr3s/WgsoZsFG_U12t5MP6YfNnKfbeT74iF5S3LE5kzAhX5IQ7ns24gJF45a0Ww6BePNTl1fPzgS/e9WHqa579q8lLn0i8GKJ_ifA79TR8Um6s9q/d3i/SkfWKuAgWIQ6p_OwXne4oOaRhrWRd85mOcTP79t4_3sxBS5lp1vYRlMbXKbnzgXG5VfiVDWdN0kGbCidL9JB4PBz6fcRjzvV/sOdGH9m1rzJnMrBCt/10kjcPnMOCveLJwS/inBqbKxMZdL/MvnD71OB0d2ANoJZt_Dl2rGfpvT7XIhLdWJHhb3r3LQxz25ZK_wzoaMhv1O3Hq/CTxJbBv9ZSCvPgiDUCeSSwlo6XMwQLB0HinZRxSjyBtIC88D1m3xoVQ86SIEdfq/wQclBZiOknCBxUKWs3kmQBJdh_yJHLgHblMrooo67YqrYP7PxU7QI9u85uLXc4hx1Ve7Lq960RJOQ5ol2WsBsLfip2FzFxkKmgBJi7vT9jv7AgAYSFeBRGah5QgeVZ/bFCcSM9kkC/TG8D_bC7eLmSkLAkV_1b1B4bk7bck7sCqdcgrMFcudN21CNF8ohme1K6zHLj4XIU2DmvLivFO12snUhdv4bKSCGyq7xr6Cmiq6EjOA70B2Z3iXSTxIMP0dEYfU5cWUMyE8772Cn1P24WN2M_eBRovA/jd5T2Mu1EQyrp9khWTxPdEJqPkf6Z_rHKIeG7yVs_iYg9/qnK2ZdcRV2GuFmwgKnV4XJpIDqHfvOQnd44SxkFDLdasM4E87WsLYjuLonHA5p9c63ePfTKWKcCHU0GXVboAB37bIFTuHisXuC21DHq_hl9nudfZJex8iSVp__xFkXIU6qSoZD595s3KT7nmUV78eBwf5BHCdF/EMFOdPnTch50uC70_lMiZnScYJxE0mBYQkxzyIrEf5dTa3eX7Ug7Z53PrMn1kUyY2dGYHdUm0fiFunMUiT0MTDaE8l9vuqAIyKAfeWbqdgIPuoc4nNzmoCBM98j0vYUfY5hyyK00Z_d7denQ2sbuHZVun3qdbfkN70GoNBji3z25D
    TX;

    echo wordwrap($tekst,50,"<br>",true) . "<br><br><br>";

    echo wordwrap(nl2br($tekst),100,"<br>",true) ;
?>