$quizData = [
    ['name' => 'Quiz 1', 'photo' => 'quiz1.jpg', 'status' => 'published'],
    ['name' => 'Quiz 2', 'photo' => 'quiz2.jpg', 'status' => 'unpublished'],
];

return view('home', compact('quizData'));