<?php

class Flasher
{


    public static function setFlash($pesan, $aksi, $tipe, $icon)
    {
        $_SESSION['flash'] = [
            'pesan' => $pesan,
            'aksi' => $aksi,
            'tipe' => $tipe,
            'icon' => $icon,
        ];
    }



    public static function flash()
    {
        if (isset($_SESSION['flash'])) {
            echo '
                <div class="alert alert-' . $_SESSION['flash']['tipe'] . '">
                    <div class="container">
                        <div class="alert-icon">
                            <i class="material-icons">' . $_SESSION['flash']['icon'] .'</i>
                        </div>
                        <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true"><i class="material-icons">clear</i></span>
                        </button>
                        <b>'. $_SESSION['flash']['pesan'].',</b>  '. $_SESSION['flash']['aksi'].'!
                    </div>
                </div>
            ';
            unset($_SESSION['flash']);
        }
    }


    public static function pesan_terkirim()
    {
        if (isset($_SESSION['flash'])) {
            echo '
                <div  class="col-10 col-xs-11 col-sm-4 alert alert-' . $_SESSION['flash']['tipe'] . '" role="alert" data-notify-position="bottom-left" style="display: inline-block; margin: 0px auto; padding-left: 65px; position: fixed; transition: all 0.5s ease-in-out 0s; z-index: 1031; bottom: 281px; left: 20px;">
                    <button type="button" class="close" data-dismiss="alert">×</button>
                    <span data-notify="icon" class="' . $_SESSION['flash']['icon'] . '"></span> 
                    <span data-notify="title">' . $_SESSION['flash']['pesan'] . '</span>   
                    <span data-notify="message">' . $_SESSION['flash']['aksi'] . '</span></div>
            ';
            unset($_SESSION['flash']);
        }
    }
}
