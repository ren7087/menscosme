<?php
class QuestionnairesController extends AppController {
    public $helpers = array('Html', 'Form');
    public $components = array('Flash');
    public $uses = array('User', 'Questionnaire');

    public function beforeFilter() {
        parent::beforeFilter();
        //ログインしてなくてもみれるページ
        $this->Auth->allow();  //投稿画面関連はlogin必須にしたい
    }

    public function question() {
        if ($this->request->is("post")) {
            $this->Questionnaire->create();
            $finger = $this->request->data['Questionnaire']['finger'];
            $kpop = $this->request->data['Questionnaire']['kpop'];
            $costume = $this->request->data['Questionnaire']['costume'];
            $entertainer = $this->request->data['Questionnaire']['entertainer'];
            $make = $this->request->data['Questionnaire']['make'];
            $cloth = $this->request->data['Questionnaire']['cloth'];
            $hair = $this->request->data['Questionnaire']['hair'];


            $kpopPoint = 0;
            $genderlessPoint = 0;
            $visualPoint = 0;
            $hostPoint = 0;
            $coolPoint = 0;

            if ($finger == "value1") {
                $genderlessPoint += 5;
            } else {
                $coolPoint += 2;
            }

            if ($kpop == "value1") {
                $kpopPoint += 6;
            } elseif ($kpop == "value2") {
                $kpopPoint += 2;
            } else {
                $kpopPoint += 0;   //マイナスにしてもいいかも
            }

            if ($costume == "value1") {
                $visualPoint += 5;
                $hostPoint += 5;
            }elseif ($costume == "value2") {
                $visualPoint += 2;
                $hostPoint += 2;
            } else {
                $visualPoint += 0;
                $hostPoint += 0;
            }

            if ($entertainer == "value1") {
                $kpopPoint += 5;
            } elseif ($entertainer == "value2") {
                $genderlessPoint += 5;
                $coolPoint += 2;
            } elseif ($entertainer == "value3") {
                $genderlessPoint += 5;
                $hostPoint += 5;
            } else {
                $coolPoint += 5;
            }
    
            if ($make == "value1") {
                $genderlessPoint += 5;
                $hostPoint += 5;
            } elseif ($make == "value2") {
                $coolPoint += 5;
            } else {
                $visualPoint += 5;
                $hostPoint += 5;
            }

            if ($cloth == "value1") {
                $visualPoint += 5;
                $hostPoint += 5;
                $genderlessPoint += 2;
            } elseif ($cloth == "value2") {
                $visualPoint += 2;
                $hostPoint += 2;
                $kpopPoint += 2;
                $genderlessPoint += 2;
            } else {
                $coolPoint += 1;
            }

            if ($hair == "value1") {
                $kpopPoint += 2;
                $hostPoint += 5;
            } elseif ($hair == "value2") {
                $kpopPoint += 5;
                $genderlessPoint += 3;
                $coolPoint += 2;
            } else {
                $coolPoint += 5;
            }

            $countDB = $this->Questionnaire->find('count');
            $count = $countDB + 1;
            $this->set(compact("count"));
            
            if ($this->Questionnaire->save($this->request->data)) {
                if ($kpopPoint >= 10) {
                    $this->redirect('/questionnaires/kpop/'. $count);
                } elseif ($genderlessPoint >= 10) {
                    $this->redirect('/questionnaires/genderless/'. $count);
                } elseif ($visualPoint >= 10) {
                    $this->redirect('/questionnaires/visual/'. $count);
                } elseif ($hostPoint >= 10) {
                    $this->redirect('/questionnaires/host/'. $count);
                } elseif ($coolPoint >= 15) {
                    $this->redirect('/questionnaires/cool/'. $count);
                } else {
                    $this->redirect('/questionnaires/midasinami/'. $count);
                }
            }
            $this->set(compact("kpopPoint", "genderlessPoint", "visualPoint", "hostPoint", "coolPoint"));
            $this->set(compact('finger', 'kpop', 'costume', 'entertainer', 'make', 'cloth', 'hair'));
        } 
    }

    public function kpop($id = null) {
        $this->Questionnaire->id = $id;
        $this->set('questionnaire', $this->Questionnaire->read());
    }

    public function host($id = null) {
        $this->Questionnaire->id = $id;
        $this->set('questionnaire', $this->Questionnaire->read());
    }

    public function genderless($id = null) {
        $this->Questionnaire->id = $id;
        $this->set('questionnaire', $this->Questionnaire->read());
    }

    public function cool($id = null) {
        $this->Questionnaire->id = $id;
        $this->set('questionnaire', $this->Questionnaire->read());
    }

    public function midasinami($id = null) {
        $this->Questionnaire->id = $id;
        $this->set('questionnaire', $this->Questionnaire->read());
    }

    public function visual($id = null) {
        $this->Questionnaire->id = $id;
        $this->set('questionnaire', $this->Questionnaire->read());
    }
}
