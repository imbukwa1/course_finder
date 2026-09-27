<?php

require_once __DIR__ . '/../Models/Course.php';

class CourseController
{
    public function index()
    {
        $query = isset($_GET['q']) ? trim($_GET['q']) : '';

        $courses = Course::search($query);

        require __DIR__ . '/../Views/courses/index.php';
    }
}