<?php

class Admin {
    public function inscription ($bdd , $mail , $motdepasse) {
        $req = $bdd->prepare("INSERT INTO admin (mail, motdepasse) VALUES(:mail, :motdepasse)");
        $req->execute(array(
            'mail' => $mail,
            'motdepasse' => $motdepasse
        ));
    }

    public function verifMail ($bdd , $mail) {
        $reqmail = $bdd->prepare("SELECT * FROM admin WHERE mail = ?");
        $reqmail->execute(array($mail));

        return $reqmail;
    }
}