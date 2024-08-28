import { FaHome, FaInfoCircle, FaEnvelope, FaDumbbell } from 'react-icons/fa';
import { Button } from "@/Components/ui/button";
import PRBatidoLogo from "../../../../public/logo.png";
import { Link } from '@inertiajs/react';

const Navbar = ({ children }) => {

    const menu = [
        {
            name: "Início",
            icon: <FaHome />,
            link: "/",
        },
        {
            name: "Ranking",
            icon: <FaInfoCircle />,
            link: "ranking",
        },
        {
            name: "Exercicios",
            icon: <FaDumbbell />,
            link: "exercicios",
        }
    ];

    return (
        <nav className="bg-black text-white">
            <div className="p-4 max-w-7xl mx-auto flex items-center justify-between">
                <div className="flex items-center space-x-6">
                    <img src={PRBatidoLogo} alt="Logo" className="w-20 h-12 rounded"/>
                </div>
                <div className="flex items-center space-x-4">
                    {menu.map((item, index) => (
                        <Button key={index} asChild className="p-4 bg-white text-black hover:bg-transparent hover:text-white hover:border-white transition duration-300">
                            <Link href={item.link}>
                                <span className="flex items-center">
                                    {item.icon}
                                    <span className="ml-2">{item.name}</span>
                                </span>
                            </Link>
                        </Button>
                    ))}
                </div>
            </div>

            <main className='h-screen'>{children}</main>
        </nav>
    );
};

export default Navbar;
