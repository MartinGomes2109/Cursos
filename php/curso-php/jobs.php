<?php

require_once 'vendor/autoload.php';

use app\models\{job, project};


/* $job1= new job('python', 'es python');
$job1-> visible=true; 
$job1-> months=33;

$job2 = new job('PHP', 'PHP developer');
$job2->visible = true;
$job2->months = 16;

$job3 = new job('java', 'es java');
$job3->visible = true;
$job3->months = 12; */

$jobs = job::all();
$projects= project::all();

/* $project1= new project('Projecto 1', 'projecto x');
$project1->visible =true;
$project1->months=17;
 */
/* $jobs = [
    $job1,$job2,$job3
   /*  [ 
        'title' => 'php dev', 'description' => 'es php', 'visible' => true,
        'months' => 24
    ],
    [
        'title' => 'python', 'description' => 'es python', 'visible' => true,
        'months' => 33
    ],
    [
        'title' => 'java', 'description' => 'es java', 'visible' => true,
        'months' => 12
    ] 
]; */

/* $projects=[
    $project1
]; */

function printElement($job)
{
    /* if ($job->visible != true) {
        return;
    } */
    echo '<li class="work-position">';
    echo '<h5>' .$job->title . '</h5>';
    echo '<h5>' . $job->description . '</h5>';
    echo '<p>' . $job->getduration() . '<p>';
    echo '<p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Nisi sapiente sed pariatur sint exercitationem eos expedita eveniet veniam ullam, quia neque facilis dicta voluptatibus. Eveniet doloremque ipsum itaque obcaecati nihil.</p>';
    echo '<strong>Achievements:</strong>';
    echo '<ul>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo  '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo   '<li>Lorem ipsum dolor sit amet, 80% consectetuer adipiscing elit.</li>';
    echo '</ul>';
    echo '</li>';
}
?>