import Navbar from '@/components/Navbar/index';
import EmDesenvolvimento from '@/Components/desenvolvimento/index';
import { useEffect } from 'react';

export default function Dashboard({ userExercises }) {
    useEffect(() => {
        console.log(userExercises); // Verifica o conteúdo no console
    }, [userExercises]);

    return (
        <>
            <Navbar>
                <div className="p-4">
                    <h1 className="text-xl font-bold mb-4">User Exercises</h1>

                    <div className="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-4">
                        {userExercises.map((exercise, index) => (
                            <div key={index} className="p-4 rounded-lg shadow-lg">
                                <h2 className="text-lg font-bold">{exercise.name}</h2>
                                <p>{exercise.description}</p>
                            </div>
                        ))}
                    </div>
                </div>
                <EmDesenvolvimento />
            </Navbar>
        </>
    );
}
