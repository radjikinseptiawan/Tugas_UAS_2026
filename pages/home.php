<?php 
include("./config/kernel.php");

$data = new DataUsed();
$results = $data->select();

if(!$results){
    $results = [
        'company_name' => 'NamaPerusahaan',
        'hero_title' => 'Masa Depan Bisnis Anda Dimulai Di Sini',
        'hero_desc' => 'Solusi inovatif untuk pertumbuhan bisnis Anda.',
        'btn_primary' => 'Lihat Layanan',
        'btn_secondary' => 'Hubungi Kami',
        'about_title' => 'Mengenal Kami Lebih Dekat',
        'about_p1' => 'Deskripsi tentang perusahaan kami...',
        'contact_email' => 'admin@perusahaan.com',
        'contact_phone' => '+62 812 3456 7890',
        'contact_address' => 'Alamat Kantor Kami'
    ];
}
?>
<div class="font-sans antialiased text-gray-800 bg-gray-50">
    <nav class="bg-white shadow-sm py-4 sticky top-0 z-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex justify-between items-center">
            <div class="flex items-center">
                <a href="#" class="text-2xl font-extrabold text-blue-600"><?= htmlspecialchars($results['company_name']) ?></a>
            </div>
            <div class="hidden md:flex space-x-8">
                <a href="#home" class="text-gray-600 hover:text-blue-600 font-semibold transition-colors duration-200">Beranda</a>
                <a href="#about" class="text-gray-600 hover:text-blue-600 font-semibold transition-colors duration-200">Tentang Kami</a>
                <a href="#services" class="text-gray-600 hover:text-blue-600 font-semibold transition-colors duration-200">Layanan</a>
                <a href="#contact" class="text-gray-600 hover:text-blue-600 font-semibold transition-colors duration-200">Kontak</a>
            </div>
        </div>
    </nav>

    <section id="home" class="bg-gradient-to-br from-blue-50 to-indigo-100 py-20 md:py-32 text-center">
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8">
            <h1 class="text-4xl md:text-6xl font-extrabold text-gray-900 leading-tight mb-6">
                <?= htmlspecialchars($results['hero_title']) ?>
            </h1>
            <p class="text-lg md:text-xl text-gray-700 mb-10 max-w-2xl mx-auto">
                <?= htmlspecialchars($results['hero_desc']) ?>
            </p>
            <div class="flex flex-col sm:flex-row justify-center gap-4">
                <a href="#services" class="bg-blue-600 hover:bg-blue-700 text-white font-bold py-3 px-8 rounded-xl shadow-lg shadow-blue-200 transition-all duration-300 ease-in-out active:scale-95 text-lg">
                    <?= htmlspecialchars($results['btn_primary'] ?? 'Lihat Layanan') ?>
                </a>
                <a href="#contact" class="bg-white border border-gray-300 hover:border-blue-500 text-gray-800 hover:text-blue-600 font-bold py-3 px-8 rounded-xl shadow-lg transition-all duration-300 ease-in-out active:scale-95 text-lg">
                    <?= htmlspecialchars($results['btn_secondary'] ?? 'Hubungi Kami') ?>
                </a>
            </div>
        </div>
    </section>

    <section id="about" class="py-16 md:py-24 bg-gray-100">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 flex flex-col md:flex-row items-center gap-12">
            <div class="md:w-1/2">
                <img src="https://images.unsplash.com/photo-1522071820081-009f0129c71c?auto=format&fit=crop&w=600&q=80" alt="Tentang Kami" class="rounded-2xl shadow-xl w-full">
            </div>
            <div class="md:w-1/2 text-center md:text-left">
                <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 mb-6">
                    <?= htmlspecialchars($results['about_title']) ?>
                </h2>
                <div class="text-lg text-gray-700 space-y-4">
                    <?= nl2br(htmlspecialchars($results['about_p1'])) ?>
                </div>
            </div>
        </div>
    </section>

    <section id="contact" class="py-16 md:py-24 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <h2 class="text-3xl md:text-4xl font-extrabold text-gray-900 text-center mb-12">Hubungi Kami</h2>
            <div class="grid grid-cols-1 md:grid-cols-2 gap-12">
                <div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-6">Informasi Kontak</h3>
                    <ul class="space-y-6 text-lg text-gray-600">
                        <li class="flex items-center">
                            <div class="p-3 bg-blue-100 rounded-lg mr-4">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"></path></svg>
                            </div>
                            <span><?= htmlspecialchars($results['contact_email']) ?></span>
                        </li>
                        <li class="flex items-center">
                            <div class="p-3 bg-blue-100 rounded-lg mr-4">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 5a2 2 0 012-2h3.28a1 1 0 01.948.684l1.498 4.493a1 1 0 01-.502 1.21l-2.257 1.135a11.042 11.042 0 005.516 5.516l1.134-2.257a1 1 0 011.21-.502l4.493 1.498a1 1 0 01.684.949V19a2 2 0 01-2 2h-1C9.716 21 3 14.284 3 6V5z"></path></svg>
                            </div>
                            <span><?= htmlspecialchars($results['contact_phone']) ?></span>
                        </li>
                        <li class="flex items-center">
                            <div class="p-3 bg-blue-100 rounded-lg mr-4">
                                <svg class="h-6 w-6 text-blue-600" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17.657 16.657L13.414 20.9A1.998 1.998 0 0110 20.9l-4.243-4.243a8 8 0 1111.314 0z"></path><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 11a3 3 0 11-6 0 3 3 0 016 0z"></path></svg>
                            </div>
                            <span><?= htmlspecialchars($results['contact_address']) ?></span>
                        </li>
                    </ul>
                </div>
                </div>
        </div>
    </section>

    <footer class="bg-gray-800 text-white py-10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <p>&copy; <?= date('Y') ?> <?= htmlspecialchars($results['company_name']) ?>. Semua Hak Dilindungi.</p>
        </div>
    </footer>
</div>