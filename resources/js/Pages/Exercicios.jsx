import Navbar from '@/components/Navbar/index';
import { Button } from "@/Components/ui/button";
import { Input } from "@/components/ui/input";
import {
    Dialog,
    DialogContent,
    DialogDescription,
    DialogFooter,
    DialogHeader,
    DialogTitle,
} from "@/components/ui/dialog";
import { router } from '@inertiajs/react';
import { useState } from 'react';

export default function Exercicios({ auth, exercises }) {
    const [selectedExercise, setSelectedExercise] = useState(null);
    const [weight, setWeight] = useState('');
    const [reps, setReps] = useState('');
    const [sets, setSets] = useState('');
    const [date, setDate] = useState('');

    const handleOpenDialog = (exercise) => {
        setSelectedExercise(exercise);
    };

    const handleCloseDialog = () => {
        setSelectedExercise(null);
        setWeight('');
        setReps('');
        setSets('');
        setDate('');
    };

    const handleRegisterPR = () => {
        router.post('/createNewPr', {
            exercise_id: selectedExercise.id,
            date,
            weight,
            reps,
            sets
        }, {
            onSuccess: () => {
                handleCloseDialog();
            }
        });
    };

    return (
        <>
            <Navbar>
                <div className="bg-gray-100 min-h-screen">
                    <div className="max-w-7xl mx-auto py-6 sm:px-6 lg:px-8">
                        <div className="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">
                            {exercises.map((exercise, index) => (
                                <div key={index} className="bg-white overflow-hidden shadow rounded-lg p-4">
                                    <div className="flex flex-col h-full">
                                        <div className="flex-grow">
                                            <h3 className="text-lg font-medium leading-6 text-gray-900">{exercise.name}</h3>
                                            <p className="mt-1 text-sm text-gray-500">{exercise.description}</p>
                                        </div>
                                        <div className="mt-4 flex justify-end">
                                            <Button onClick={() => handleOpenDialog(exercise)}>Registrar PR</Button>
                                        </div>
                                    </div>
                                </div>
                            ))}
                        </div>
                    </div>
                </div>
            </Navbar>

            {selectedExercise && (
                <Dialog open={!!selectedExercise} onOpenChange={handleCloseDialog}>
                    <DialogContent>
                        <DialogHeader>
                            <DialogTitle>{selectedExercise.name}</DialogTitle>
                            <DialogDescription>
                                <p>{selectedExercise.description}</p>
                                <div className="mt-4">
                                    <Input
                                        type="date"
                                        placeholder="Data"
                                        className="border border-gray-300 rounded-md p-2 w-full mb-2"
                                        value={date}
                                        onChange={(e) => setDate(e.target.value)}
                                    />
                                    <Input
                                        placeholder="Peso"
                                        className="border border-gray-300 rounded-md p-2 w-full mb-2"
                                        value={weight}
                                        onChange={(e) => setWeight(e.target.value)}
                                    />
                                    <Input
                                        placeholder="Repetições"
                                        className="border border-gray-300 rounded-md p-2 w-full mb-2"
                                        value={reps}
                                        onChange={(e) => setReps(e.target.value)}
                                    />
                                    <Input
                                        placeholder="Séries"
                                        className="border border-gray-300 rounded-md p-2 w-full"
                                        value={sets}
                                        onChange={(e) => setSets(e.target.value)}
                                    />
                                </div>
                            </DialogDescription>
                        </DialogHeader>
                        <DialogFooter>
                            <Button
                                type="button"
                                onClick={handleRegisterPR}
                            >
                                Registrar
                            </Button>
                            <Button
                                type="button"
                                onClick={handleCloseDialog}
                            >
                                Fechar
                            </Button>
                        </DialogFooter>
                    </DialogContent>
                </Dialog>
            )}
        </>
    );
}
