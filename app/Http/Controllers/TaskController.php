<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Task;
use App\Http\Requests\TaskRequest;

class TaskController extends Controller
{
      // Afficher toutes les tâches de l'utilisateur connecté
    public function index()
    {
        $tasks = auth()->user()->tasks()->orderBy('due_date')->get();
        return response()->json($tasks);
    }

    // Créer une nouvelle tâche
    public function store(TaskRequest $request)
    {
        $task = auth()->user()->tasks()->create($request->validated());
        return response()->json($task, 201);
    }

    // Afficher une tâche spécifique
    public function show(Task $task)
    {
        // Vérifier si la tâche appartient à l'utilisateur connecté
        $this->authorize('view', $task);
        return response()->json($task);
    }

    // Mettre à jour une tâche
    public function update(TaskRequest $request, Task $task)
    {
        $this->authorize('update', $task);
        $task->update($request->validated());
        return response()->json($task);
    }

    // Supprimer une tâche
    public function destroy(Task $task)
    {
        $this->authorize('delete', $task);
        $task->delete();
        return response()->json(null, 204);
    }


}