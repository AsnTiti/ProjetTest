<?php

namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Models\Student;
use App\Models\Course;

class StudentController extends Controller
{
    protected $student;
    protected $course;

    public function __construct(){
     $this->student= new Student();
    }

    public function index(){
        return $this->student->all();
    }

    public function store(Request $request){
        return $this->student->create($request->all());
    }

    public function show(string $id){
     return $student =$this->student->find($id);
    }

    public function update(Request $request, string $id ){
        $student =$this->student->find($id);
        $student->update($request->all());
        return $student;
    }

    public function destroy(string $id ){
        $student =$this->student->find($id);
        return $student->delete();
    }
    
    public function addCourseToStudent($studentId, $courseId)
    {
        $student = Student::find($studentId);
        $course = Course::find($courseId);

        if ($student && $course) {
            $student->courses()->attach($course);
            return response()->json(['message' => 'Cours ajouté avec succès à l\'étudiant.']);
        } else {
            return response()->json(['message' => 'Étudiant ou cours non trouvé.'], 404);
        }
    }
}

