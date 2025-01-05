<?php

function messageFlash() : void {
  if(isset($_SESSION['flash'])) {
    foreach($_SESSION['flash'] as $type => $message) {
        echo <<<HTML
        <div id="btn-close" class='alert alert-$type alert-dismissible fade show' role='alert'>
            <button type='button' class='btn-close' data-bs-dismiss='alert' aria-label='Close' onclick="this.parentElement.remove()"></button>
            $message
        </div>
        HTML;
    }
    unset($_SESSION['flash']);
  }
}