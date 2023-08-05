import React from "react";
import { Link, Head } from "@inertiajs/react";
import AuthenticatedLayout from "@/Layouts/AuthenticatedLayout";
import Pagination from "@/Components/Pagination";

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

                <Pagination />
            </div>
        </AuthenticatedLayout>
    );
}
