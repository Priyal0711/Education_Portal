<?php

namespace App\Http\Controllers;
use App\Models\Subject;
use Illuminate\Http\Request;
use App\Models\Chapter;

class SubjectController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'subject' => 'required|string|max:255',
        ]);

        $subject = new Subject();
        $subject->subject = $request->input('subject');
        $subject->save();

        return redirect()->route('subject.show')->with('success', 'subject added successfully!');
    }
    public function show()
    {
        $subject = Subject::all();
        return view('subject.create', compact('subject'));
    }

    public function display($id)
    {
        $subject = Subject::find($id);
        return view('subjects.display', compact('subject'));
    }
    public function edit($id)
    {
        $subject = Subject::find($id);
        return view('subjects.edit', compact('subject'));
    }


    public function update(Request $request, $id)
    {

        $subject = Subject::findOrFail($id);
        $subject->update($request->all());
        $subject->save();
        return redirect()->route('subject.show')->with('success', 'subject updated successfully');
    }

    public function delete($id)
    {
        $subject = Subject::findOrFail($id);
        $subject->delete();
        return redirect()->route('subject.show')->with('success', 'subject deleted successfully');
    }

    public function assignChapters(Subject $subject)
    {
        $chapters = Chapter::all();
        return view('subjects.assign_chapters', compact('subject', 'chapters'));
    }

    public function saveChapters(Request $request, Subject $subject)
    {
        $request->validate([
            'chapters' => 'array',
            'chapters.*' => 'exists:chapters,id',
        ]);

        $subject->chapters()->sync($request->input('chapters'));

        return redirect()->route('subject.create')->with('success', 'Chapters assigned to subject successfully!');
    }
}

