@extends('layouts.template')

@section('contenido')
    <section>
        <div class="flex items-center justify-center bg-gray-50 py-12 px-4 sm:px-6 lg:px-8">
            <div class="max-w-xs w-full space-y-8">
                <div>
                    <img class="mx-auto h-12 w-auto" src="https://tailwindui.com/img/logos/workflow-mark-indigo-600.svg"
                        alt="Workflow">
                    <h2 class="mt-6 text-center text-3xl font-extrabold text-gray-900">Sistema CRUD</h2>
                    <p class="mt-2 text-center text-sm text-gray-600">
                        o <a href="{{ route('register.index') }}"
                            class="font-medium text-indigo-600 hover:text-indigo-500">regístrate</a>
                    </p>

                    <p class="text-center my-3">Este es un prototipo de crud a través de laravel y tailwindcss que te ayudara a entender todas las funciones que siguen los sistemas para que se cumplan especificaciones de crear, leer, actualizar y borrar datos de una base de datos, cabe recalcar que este prototipo no utilizo boostrap.</p>

                    <a type="submit" href="{{ route('login') }}"
                        class="group relative w-full flex justify-center py-2 px-4 border border-transparent text-sm font-medium rounded-md text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                        Iniciar sesión</a>
                </div>
            </div>
        </div>
    </section>
@endsection
