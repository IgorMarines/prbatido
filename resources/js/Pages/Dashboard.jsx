import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Dashboard({ auth, exercises }) {

    console.log(exercises);
    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Dashboard" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                        {exercises.length > 0 ? (
                            <div className="p-6 bg-black border-b border-gray-800">
                                <h2 className="text-white text-lg font-semibold">Your Exercises</h2>

                                <div className="mt-4 space-y-4">
                                    {exercises.map((exercise) => (
                                        <div key={exercise.id} className="bg-white p-4 rounded-lg">
                                            <h3 className="text-lg font-semibold">{exercise.name}</h3>
                                            <p className="text-gray-500">{exercise.description}</p>
                                        </div>
                                    ))}
                                </div>
                            </div>
                        ) : null}
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
