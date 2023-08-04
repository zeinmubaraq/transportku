export default function DashboardLayout({ children }) {
    return (
        <div>
            <h1 className="text-3xl font-extrabold text-blue-700">
                TransportKu
            </h1>
            <main>{children}</main>
        </div>
    );
}
