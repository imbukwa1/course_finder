<?php

class Course
{
    public static function search($query)
    {
        $courses = [
            ['code' => 'SWE101', 'title' => 'Introduction to Software Engineering'],
            ['code' => 'SWE202', 'title' => 'Web Development'],
            ['code' => 'SWE303', 'title' => 'Database Systems'],
            ['code' => 'SWE404', 'title' => 'Software Testing'],
            ['code' => 'SWE405', 'title' => 'Mobile Application Development'],
        ];

        $query = trim($query);

        if ($query === '') {
            return $courses;
        }

        $results = [];

        foreach ($courses as $course) {
            if (
                stripos($course['code'], $query) !== false ||
                stripos($course['title'], $query) !== false
            ) {
                $results[] = $course;
            }
        }

        return $results;
    }
}