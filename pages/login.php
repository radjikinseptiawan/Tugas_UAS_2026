<?php 

if($_SERVER["REQUEST_METHOD"] === "POST"){
    $username = $_POST['username'] ?? null;
    $password = $_POST["password"] ?? null;

    if($username == 'admin' && $password == '123'){
        $_SESSION['admin'] = True;
        $_SESSION['username'] = $username;
        header("Location: /companyProfileCMS/edit");
        exit;
    }
}

?>

<div class="flex min-h-screen items-center justify-center bg-gray-50 p-4">
    <div class="flex w-full max-w-sm flex-col items-center justify-center rounded-2xl border border-gray-100 bg-white p-8 shadow-2xl">        
        <h1 class="mb-8 text-3xl font-extrabold text-gray-800">Login</h1>
        <form action="" method="POST">
        <div class="flex w-full flex-col gap-5">
            <div class="flex flex-col gap-1.5">
                <label for="username" class="text-sm font-semibold text-gray-600">Username</label>
                <input type="text" name="username" id="username" placeholder="Masukkan username" 
                    class="rounded-xl border border-gray-200 bg-gray-50 p-3 outline-none transition-all focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100">
            </div>
            <div class="flex flex-col gap-1.5">
                <label for="password" class="text-sm font-semibold text-gray-600">Password</label>
                <input name="password" type="password" id="password" placeholder="••••••••" 
                    class="rounded-xl border border-gray-200 bg-gray-50 p-3 outline-none transition-all focus:border-blue-500 focus:bg-white focus:ring-4 focus:ring-blue-100">
            </div>
            <button class="mt-4 rounded-xl bg-blue-600 py-3.5 font-bold text-white shadow-lg shadow-blue-200 transition-all hover:bg-blue-700 active:scale-95">
                Masuk
            </button>            
        </form>
        </div>
        <p class="mt-8 text-sm text-gray-400">
            © 2026 Lapindo.inc 
        </p>
    </div>
</div>