import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';

export default function Pessoas({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Pessoas" />

            <div className="py-12">
                <div className="max-w-7xl mx-auto sm:px-6 lg:px-8">
                    <div className="bg-black overflow-hidden shadow-sm sm:rounded-lg">
                        
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}