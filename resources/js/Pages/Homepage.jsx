import React from "react";
import { Link, Head } from "@inertiajs/react";

export default function Homepage(props) {
    return (
        <div className="text-center my-5 antialiased bg-gray-900">
            <Head title={props.title} />
            <h1 className="text-3xl font-extrabold text-green-400">
                {props.title}
            </h1>
            <h3 className="text-lg font-semibold text-green-400">
                {props.desc}
            </h3>
        </div>
    );
}
