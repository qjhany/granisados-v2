<?php

namespace App\Http\Controllers;

use App\Models\Pqrs;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\View\View;

class PqrsController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate($this->rules());

        Pqrs::create($validated);

        return redirect()
            ->route('nosotros')
            ->with('success', 'Mensaje guardado correctamente');
    }

    public function index(): View
    {
        $mensajes = Pqrs::query()
            ->latest('id')
            ->paginate(20);

        return view('mensajes', compact('mensajes'));
    }

    public function edit(int $id): View
    {
        $mensaje = Pqrs::findOrFail($id);

        return view('mensajes-editar', compact('mensaje'));
    }

    public function update(Request $request, int $id): RedirectResponse
    {
        $mensaje = Pqrs::findOrFail($id);
        $mensaje->update($request->validate($this->rules()));

        return redirect()
            ->route('mensajes')
            ->with('success', 'Mensaje actualizado correctamente');
    }

    public function destroy(int $id): RedirectResponse
    {
        Pqrs::findOrFail($id)->delete();

        return redirect()
            ->route('mensajes')
            ->with('success', 'Mensaje eliminado correctamente');
    }

    private function rules(): array
    {
        return [
            'nombres' => ['required', 'string', 'max:100'],
            'apellidos' => ['required', 'string', 'max:100'],
            'correo' => ['required', 'email', 'max:255'],
            'tipo' => ['required', 'in:Queja,Petición,Felicitación'],
            'mensaje' => ['required', 'string', 'min:10', 'max:2000'],
        ];
    }
}
