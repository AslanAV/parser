<?php

namespace App\App;

use GuzzleHttp\Client;

use function App\ResumeParser\run as runParser;
use function App\ResumeFinder\run as runFinder;

function findResumesLinks()
{
    runFinder();
}

function parseResumes()
{
    runParser();
}
