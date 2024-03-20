<?php

class Project {
    public $title;
    public $image;
    public $description;
    public $url;

    public function __construct($title = "", 
                                $image = "", 
                                $description = "", 
                                $url = ""){
        $this->title = $title;
        $this->image = $image;
        $this->description = $description;
        $this->url = $url;
    }

    public function render() {
    echo '<div class="box">
            <h1>'.$this->title.'</h1>
            <a href="'.$this->url.'"><img src="'.$this->image.'"></a>
            <p>'.$this->description.'</p>
         </div>'; 
    }
}

$projects = [
    new Project('Projet PortFolio', 'images/portfolio.png', 'Mon Portfolio', 'projets/portfolio.php'),
    new Project('Projet Service Info PRO', 'images/serviceinfopro.png', 'Description here', 'projets/serviceinfopro.php'),
    new Project('Projet TePlan', 'images/teplan.png', 'Description here', 'projets/teplan.php'),
    new Project('Projet Foot', 'images/projetfoot.png', 'Description here', 'projets/foot.php'),
    new Project('Site WEB Service Info PRO', 'images/serviceinfopro.png', 'Description here', '#.php'),
    new Project('Site WEB Service Info PRO', 'images/serviceinfopro.png', 'Description here', '#.php')
];

