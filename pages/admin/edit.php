<?php 
include("./config/kernel.php");

if(!isset($_SESSION['admin']) || $_SESSION['admin'] == false){
    header("Location: /login");
    exit();
}

$dataObj = new DataUsed();
$currentData = $dataObj->select();

if(!$currentData){
    $currentData = [
        'company_name' => '', 'hero_title' => '', 'hero_desc' => '',
        'btn_primary' => '', 'btn_secondary' => '', 'about_title' => '',
        'about_p1' => '', 'contact_email' => '', 'contact_phone' => '', 'contact_address' => ''
    ];
}

include("./layouts/navigation.php"); 
?>

<div class="min-h-screen bg-gray-50 pb-20 font-sans antialiased">
    <header class="bg-white border-b border-gray-200 py-6 mb-8 sticky top-0 z-10">
        <div class="max-w-7xl mx-auto px-4 flex justify-between items-center">
            <div>
                <h1 class="text-2xl font-extrabold text-gray-800">Editor Landing Page</h1>
                <p class="text-sm text-gray-500">Data yang Anda ubah akan langsung tampil di halaman depan.</p>
            </div>
            <button form="main-editor-form" type="submit" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-2.5 px-6 rounded-xl shadow-lg shadow-blue-200 transition-all active:scale-95">
                Simpan Semua Perubahan
            </button>
        </div>
    </header>

    <main class="max-w-5xl mx-auto px-4">
        <form id="main-editor-form" action="process_update" method="POST" class="space-y-10">
            
            <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-6 py-3 border-b border-gray-100 text-xs font-bold uppercase tracking-wider text-gray-400">Navigasi & Identitas</div>
                <div class="p-6">
                    <label class="block text-sm font-semibold text-gray-600 mb-2">Nama Perusahaan (Navbar)</label>
                    <input type="text" name="company_name" 
                        value="<?= htmlspecialchars($currentData['company_name']) ?>" 
                        class="w-full text-xl font-bold text-blue-600 bg-blue-50/50 border border-blue-100 rounded-xl p-4 outline-none focus:ring-4 focus:ring-blue-100 transition-all">
                </div>
            </section>

            <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-6 py-3 border-b border-gray-100 text-xs font-bold uppercase tracking-wider text-gray-400">Bagian Utama (Hero)</div>
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">Judul Besar (H1)</label>
                        <textarea name="hero_title" rows="2" 
                            class="w-full text-3xl font-extrabold text-gray-900 bg-gray-50 border border-gray-200 rounded-xl p-4 outline-none focus:ring-4 focus:ring-blue-100 transition-all"><?= htmlspecialchars($currentData['hero_title']) ?></textarea>
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">Deskripsi (Sub-header)</label>
                        <textarea name="hero_desc" rows="3" 
                            class="w-full text-lg text-gray-700 bg-gray-50 border border-gray-200 rounded-xl p-4 outline-none focus:ring-4 focus:ring-blue-100 transition-all"><?= htmlspecialchars($currentData['hero_desc']) ?></textarea>
                    </div>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 mb-2">Teks Tombol Utama</label>
                            <input type="text" name="btn_primary" value="<?= htmlspecialchars($currentData['btn_primary']) ?>" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg outline-none focus:border-blue-500">
                        </div>
                        <div>
                            <label class="block text-sm font-semibold text-gray-600 mb-2">Teks Tombol Sekunder</label>
                            <input type="text" name="btn_secondary" value="<?= htmlspecialchars($currentData['btn_secondary']) ?>" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-lg outline-none focus:border-blue-500">
                        </div>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-6 py-3 border-b border-gray-100 text-xs font-bold uppercase tracking-wider text-gray-400">Tentang Kami</div>
                <div class="p-6 space-y-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">Judul Section</label>
                        <input type="text" name="about_title" value="<?= htmlspecialchars($currentData['about_title']) ?>" class="w-full text-xl font-bold p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:ring-4 focus:ring-blue-100">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">Paragraf Deskripsi</label>
                        <textarea name="about_p1" rows="5" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:ring-4 focus:ring-blue-100"><?= htmlspecialchars($currentData['about_p1']) ?></textarea>
                    </div>
                </div>
            </section>

            <section class="bg-white rounded-2xl shadow-sm border border-gray-100 overflow-hidden">
                <div class="bg-gray-50 px-6 py-3 border-b border-gray-100 text-xs font-bold uppercase tracking-wider text-gray-400">Informasi Kontak</div>
                <div class="p-6 grid grid-cols-1 md:grid-cols-3 gap-6">
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">Email</label>
                        <input type="email" name="contact_email" value="<?= htmlspecialchars($currentData['contact_email']) ?>" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">WhatsApp/Telp</label>
                        <input type="text" name="contact_phone" value="<?= htmlspecialchars($currentData['contact_phone']) ?>" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-blue-500">
                    </div>
                    <div>
                        <label class="block text-sm font-semibold text-gray-600 mb-2">Alamat Kantor</label>
                        <input type="text" name="contact_address" value="<?= htmlspecialchars($currentData['contact_address']) ?>" class="w-full p-3 bg-gray-50 border border-gray-200 rounded-xl outline-none focus:border-blue-500">
                    </div>
                </div>
            </section>

        </form>
    </main>

    <div class="fixed bottom-6 right-6 md:hidden">
        <button form="main-editor-form" type="submit" class="bg-blue-600 w-14 h-14 rounded-full flex items-center justify-center text-white shadow-2xl active:scale-90 transition-transform">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path></svg>
        </button>
    </div>
</div>