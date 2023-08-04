import React from "react";
import { Link, Head } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import { ChevronLeftIcon, ChevronRightIcon } from "@heroicons/react/20/solid";

export default function Index(props) {
    return (
        <AuthenticatedLayout
            user={props.auth.user}
            header={
                <h2 className="font-semibold text-xl text-gray-800 leading-tight">
                    Armada
                </h2>
            }
        >
            <Head title="Armada" />
            <div className="bg-white w-10/12 mx-auto mt-5 shadow-md rounded-md px-8 py-5">
                <div className="flex items-center justify-between mt-3 mb-5">
                    <div>
                        <label htmlFor="show" className="mr-2">
                            Show
                        </label>
                        <select
                            id="show"
                            className="mr-2 border-none bg-slate-200 py-2 rounded-md text-gray-600"
                        >
                            <option value="10">10</option>
                            <option value="25">25</option>
                            <option value="50">50</option>
                            <option value="100">100</option>
                        </select>
                        <label htmlFor="show">entries</label>
                    </div>
                    <div className="flex items-center justify-between">
                        <div className="mr-10">
                            <label htmlFor="search" className="mr-2">
                                Search:
                            </label>
                            <input
                                type="text"
                                id="search"
                                className="rounded-md py-2 bg-slate-200 text-gray-600 border-none"
                            />
                        </div>
                        <a
                            href="#"
                            className="rounded-md bg-indigo-600 text-white py-2 px-4 hover:bg-indigo-700"
                        >
                            Create
                        </a>
                    </div>
                </div>
                <table className="table-auto w-full">
                    <thead className="border-b border-gray-400">
                        <tr>
                            <th className="py-2">No Polisi</th>
                            <th>Merek</th>
                            <th>Seris</th>
                            <th>Type</th>
                            <th>Tonase</th>
                            <th>Driver</th>
                            <th>Status</th>
                        </tr>
                    </thead>
                    <tbody>
                        {props.vehicles
                            ? props.vehicles.map((vehicle) => {
                                  return (
                                      <tr
                                          key={vehicle.id}
                                          className="hover:bg-indigo-100"
                                      >
                                          <td className="py-2">
                                              {vehicle.license_number}
                                          </td>
                                          <td>{vehicle.name}</td>
                                          <td>{vehicle.series}</td>
                                          <td>{vehicle.type}</td>
                                          <td>{vehicle.tonnage}</td>
                                          <td>{vehicle.driver.name}</td>
                                          <td className="text-center">
                                              <span className="inline-flex items-center rounded-md bg-green-300 px-2 py-1 font-medium text-sm text-green-900">
                                                  Active
                                              </span>
                                          </td>
                                      </tr>
                                  );
                              })
                            : "Tidak ada Data"}
                    </tbody>
                </table>

                <div className="flex mt-3 items-center justify-between border-t border-gray-200 bg-white px-4 pt-5 pb-3 sm:px-0">
                    <div className="flex flex-1 justify-between sm:hidden">
                        <a
                            href="#"
                            className="relative inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                        >
                            Previous
                        </a>
                        <a
                            href="#"
                            className="relative ml-3 inline-flex items-center rounded-md border border-gray-300 bg-white px-4 py-2 text-sm font-medium text-gray-700 hover:bg-gray-50"
                        >
                            Next
                        </a>
                    </div>
                    <div className="hidden sm:flex sm:flex-1 sm:items-center sm:justify-between">
                        <div>
                            <p className="text-sm text-gray-700">
                                Showing <span className="font-medium">1</span>{" "}
                                to <span className="font-medium">10</span> of{" "}
                                <span className="font-medium">97</span> results
                            </p>
                        </div>
                        <div>
                            <nav
                                className="isolate inline-flex -space-x-px rounded-md shadow-sm"
                                aria-label="Pagination"
                            >
                                <a
                                    href="#"
                                    className="relative inline-flex items-center rounded-l-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                                >
                                    <span className="sr-only">Previous</span>
                                    <ChevronLeftIcon
                                        className="h-5 w-5"
                                        aria-hidden="true"
                                    />
                                </a>
                                {/* Current: "z-10 bg-indigo-600 text-white focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600", Default: "text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:outline-offset-0" */}
                                <a
                                    href="#"
                                    aria-current="page"
                                    className="relative z-10 inline-flex items-center bg-indigo-600 px-4 py-2 text-sm font-semibold text-white focus:z-20 focus-visible:outline focus-visible:outline-2 focus-visible:outline-offset-2 focus-visible:outline-indigo-600"
                                >
                                    1
                                </a>
                                <a
                                    href="#"
                                    className="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                                >
                                    2
                                </a>
                                <a
                                    href="#"
                                    className="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
                                >
                                    3
                                </a>
                                <span className="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-700 ring-1 ring-inset ring-gray-300 focus:outline-offset-0">
                                    ...
                                </span>
                                <a
                                    href="#"
                                    className="relative hidden items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0 md:inline-flex"
                                >
                                    8
                                </a>
                                <a
                                    href="#"
                                    className="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                                >
                                    9
                                </a>
                                <a
                                    href="#"
                                    className="relative inline-flex items-center px-4 py-2 text-sm font-semibold text-gray-900 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                                >
                                    10
                                </a>
                                <a
                                    href="#"
                                    className="relative inline-flex items-center rounded-r-md px-2 py-2 text-gray-400 ring-1 ring-inset ring-gray-300 hover:bg-gray-50 focus:z-20 focus:outline-offset-0"
                                >
                                    <span className="sr-only">Next</span>
                                    <ChevronRightIcon
                                        className="h-5 w-5"
                                        aria-hidden="true"
                                    />
                                </a>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </AuthenticatedLayout>
    );
}
