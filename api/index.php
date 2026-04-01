<?php

$featuredBooks = [
    ["title" => "The Pragmatic Programmer", "price" => "Rp 350.000", "category" => "Programming", "image" => "https://images.unsplash.com/photo-1544947950-fa07a98d237f?q=80&w=800&auto=format&fit=crop"],
    ["title" => "Clean Code", "price" => "Rp 310.000", "category" => "Software Engineering", "image" => "https://images.unsplash.com/photo-1532012197267-da84d127e765?q=80&w=800&auto=format&fit=crop"],
    ["title" => "Design Patterns", "price" => "Rp 420.000", "category" => "Architecture", "image" => "https://images.unsplash.com/photo-1509021436665-8f07dbf5bf1d?q=80&w=800&auto=format&fit=crop"],
    ["title" => "Refactoring", "price" => "Rp 380.000", "category" => "Best Practices", "image" => "https://images.unsplash.com/photo-1589829085413-56de8ae18c73?q=80&w=800&auto=format&fit=crop"],
    ["title" => "Introduction to Algorithms", "price" => "Rp 550.000", "category" => "Computer Science", "image" => "https://images.unsplash.com/photo-1515879218367-8466d910aaa4?q=80&w=800&auto=format&fit=crop"],
    ["title" => "You Don't Know JS", "price" => "Rp 275.000", "category" => "Programming", "image" => "https://images.unsplash.com/photo-1587620962725-abab7fe55159?q=80&w=800&auto=format&fit=crop"]
];
?>
<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>BookStore - Premium Collection</title>
    
    <link href="https://fonts.googleapis.com/css2?family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <script src="https://cdn.tailwindcss.com"></script>
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    fontFamily: { sans: ['Plus Jakarta Sans', 'sans-serif'] },
                    colors: {
                        primary: "#0f172a",
                        accent: "#2563eb"
                    }
                }
            }
        }
    </script>
    <style>
        .search-focus:focus-within { @apply ring-2 ring-accent ring-offset-2; }
        .glass-card { background: rgba(255, 255, 255, 0.8); backdrop-filter: blur(12px); border: 1px solid rgba(229, 231, 235, 0.5); }
    </style>
</head>
<body class="antialiased bg-[#fafafa] text-slate-900">

    <nav class="sticky top-0 z-50 w-full border-b border-slate-200/60 bg-white/70 backdrop-blur-xl">
        <div class="container mx-auto px-6 h-20 flex items-center justify-between">
            <a href="#" class="text-2xl font-bold tracking-tighter text-primary">
                Book<span class="text-accent">Store</span><span class="text-accent">.</span>
            </a>
            
            <div class="hidden md:flex items-center space-x-10">
                <a href="#home" class="text-sm font-semibold hover:text-accent transition-colors">Home</a>
                <a href="#featured" class="text-sm font-semibold hover:text-accent transition-colors">Catalog</a>
                <a href="#about" class="text-sm font-semibold hover:text-accent transition-colors">Our Story</a>
                <a href="#login" class="bg-primary text-white px-5 py-2.5 rounded-full text-sm font-bold hover:bg-slate-800 transition-all shadow-lg shadow-blue-900/10">Sign In</a>
            </div>
        </div>
    </nav>

    <main>
        <section id="home" class="pt-24 pb-20 px-6">
            <div class="container mx-auto text-center" data-aos="fade-up">
                <span class="px-4 py-1.5 rounded-full bg-blue-50 text-accent text-xs font-bold uppercase tracking-widest border border-blue-100">Edisi Terbatas 2026</span>
                <h1 class="mt-8 text-5xl md:text-7xl font-extrabold tracking-tight leading-[1.1] text-slate-900">
                    Investasi Terbaik <br><span class="text-accent">Adalah Ilmu.</span>
                </h1>
                <p class="mt-8 text-lg text-slate-500 max-w-2xl mx-auto leading-relaxed">
                    Kurasi buku teknis terbaik untuk developer profesional. Mulai perjalanan belajarmu dari sumber yang paling terpercaya.
                </p>

                <div class="mt-12 max-w-2xl mx-auto relative group" data-aos="fade-up" data-aos-delay="200">
                    <div class="absolute inset-y-0 left-5 flex items-center pointer-events-none">
                        <svg class="h-5 w-5 text-slate-400 group-focus-within:text-accent" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M21 21l-6-6m2-5a7 7 0 11-14 0 7 7 0 0114 0z"/></svg>
                    </div>
                    <input type="text" id="bookSearch" 
                        class="block w-full pl-14 pr-6 py-5 bg-white border border-slate-200 rounded-2xl shadow-xl shadow-slate-200/50 focus:outline-none focus:ring-2 focus:ring-accent/20 focus:border-accent transition-all text-lg" 
                        placeholder="Cari judul buku atau kategori...">
                </div>
            </div>
        </section>

        <section id="featured" class="py-24 bg-white border-y border-slate-100">
            <div class="container mx-auto px-6">
                <div class="flex flex-col md:flex-row md:items-end justify-between mb-16 gap-6">
                    <div>
                        <h2 class="text-3xl font-bold tracking-tight">Koleksi Terpopuler</h2>
                        <p class="text-slate-500 mt-2">Menampilkan buku-buku dengan rating tertinggi bulan ini.</p>
                    </div>
                    <div class="flex gap-2">
                        <span class="px-4 py-2 rounded-lg bg-slate-100 text-slate-600 text-sm font-medium">Semua</span>
                        <span class="px-4 py-2 rounded-lg hover:bg-slate-50 text-slate-400 text-sm font-medium cursor-pointer transition-colors">Baru</span>
                    </div>
                </div>

                <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-10" id="bookGrid">
                    <?php foreach ($featuredBooks as $book): ?>
                    <div class="book-card group bg-white rounded-3xl border border-slate-100 p-4 hover:border-accent/20 hover:shadow-2xl hover:shadow-accent/5 transition-all duration-500" 
                         data-title="<?= strtolower($book['title']) ?>" 
                         data-category="<?= strtolower($book['category']) ?>">
                        <div class="relative aspect-[4/5] overflow-hidden rounded-2xl mb-6">
                            <img src="<?= $book['image'] ?>" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                            <div class="absolute top-4 left-4 bg-white/90 backdrop-blur px-3 py-1 rounded-full text-[10px] font-bold uppercase tracking-wider">
                                <?= $book['category'] ?>
                            </div>
                        </div>
                        <h3 class="text-xl font-bold mb-2 group-hover:text-accent transition-colors"><?= $book['title'] ?></h3>
                        <div class="flex items-center justify-between mt-6">
                            <span class="text-xl font-black text-slate-900"><?= $book['price'] ?></span>
                            <button class="bg-slate-900 text-white p-3 rounded-xl hover:bg-accent transition-colors">
                                <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M12 4v16m8-8H4"/></svg>
                            </button>
                        </div>
                    </div>
                    <?php endforeach; ?>
                </div>
                
                <div id="noResults" class="hidden py-20 text-center">
                    <p class="text-slate-400 text-lg">Buku yang anda cari tidak ditemukan...</p>
                </div>
            </div>
        </section>

        <section id="about" class="py-24 px-6 overflow-hidden">
            <div class="container mx-auto">
                <div class="grid lg:grid-cols-2 gap-20 items-center">
                    <div class="relative" data-aos="fade-right">
                        <div class="absolute -top-10 -left-10 w-64 h-64 bg-accent/10 rounded-full blur-3xl"></div>
                        <div class="relative rounded-[2.5rem] overflow-hidden shadow-2xl">
                            <img src="https://images.unsplash.com/photo-1524995997946-a1c2e315a42f?q=80&w=1000" alt="Library" class="w-full h-full object-cover">
                        </div>
                        <div class="absolute -bottom-10 -right-10 glass-card p-8 rounded-3xl shadow-xl hidden md:block">
                            <p class="text-4xl font-bold text-accent">10k+</p>
                            <p class="text-sm font-semibold text-slate-500">Pembaca Aktif</p>
                        </div>
                    </div>
                    <div data-aos="fade-left">
                        <h2 class="text-4xl font-bold leading-tight">Membangun Jembatan Antara <span class="text-accent">Ide & Realita.</span></h2>
                        <p class="mt-6 text-slate-500 leading-relaxed">
                            Didirikan pada tahun 2024, BookStore hadir bukan sekadar sebagai toko buku biasa. Kami adalah komunitas bagi para pembelajar yang haus akan inovasi teknis.
                        </p>
                        <div class="grid sm:grid-cols-2 gap-8 mt-12">
                            <div class="p-6 rounded-2xl bg-white shadow-sm border border-slate-100">
                                <div class="w-12 h-12 bg-blue-50 rounded-xl flex items-center justify-center text-accent mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 12l2 2 4-4m6 2a9 9 0 11-18 0 9 9 0 0118 0z"/></svg>
                                </div>
                                <h4 class="font-bold mb-1">Kurasi Ketat</h4>
                                <p class="text-xs text-slate-400">Hanya buku berkualitas dari penulis ternama dunia.</p>
                            </div>
                            <div class="p-6 rounded-2xl bg-white shadow-sm border border-slate-100">
                                <div class="w-12 h-12 bg-orange-50 rounded-xl flex items-center justify-center text-orange-500 mb-4">
                                    <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24"><path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M13 10V3L4 14h7v7l9-11h-7z"/></svg>
                                </div>
                                <h4 class="font-bold mb-1">Pengiriman Cepat</h4>
                                <p class="text-xs text-slate-400">Sistem logistik cerdas untuk keamanan pesanan Anda.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
   

<section id="testimonials" class="py-24 bg-slate-50 overflow-hidden">
    <div class="container mx-auto px-6">
        <div class="text-center mb-16" data-aos="fade-up">
            <h2 class="text-4xl font-black tracking-tight text-slate-900 uppercase">Apa Kata Mereka?</h2>
            <p class="text-slate-500 mt-4 max-w-xl mx-auto text-lg">Ribuan developer telah meningkatkan karir mereka melalui kurasi buku terbaik kami.</p>
        </div>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 relative group hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="100">
                <div class="absolute -top-4 -right-4 bg-accent text-white p-3 rounded-2xl rotate-12 group-hover:rotate-0 transition-transform">
                    <svg class="w-6 h-6" fill="currentColor" viewBox="0 0 24 24"><path d="M14.017 21L14.017 18C14.017 16.8954 14.9124 16 16.017 16H19.017C20.1216 16 21.017 16.8954 21.017 18V21C21.017 22.1046 20.1216 23 19.017 23H16.017C14.9124 23 14.017 22.1046 14.017 21ZM14.017 21V10C14.017 8.89543 14.9124 8 16.017 8H19.017C20.1216 8 21.017 8.89543 21.017 10V13M3.01697 21L3.01697 18C3.01697 16.8954 3.9124 16 5.01697 16H8.01697C9.12154 16 10.017 16.8954 10.017 18V21C10.017 22.1046 9.12154 23 8.01697 23H5.01697C3.9124 23 3.01697 22.1046 3.01697 21ZM3.01697 21V10C3.01697 8.89543 3.9124 8 5.01697 8H8.01697C9.12154 8 10.017 8.89543 10.017 10V13" /></svg>
                </div>
                <p class="text-slate-600 italic leading-relaxed">"Buku Clean Code yang saya beli di sini benar-benar mengubah cara saya menulis fungsi. Pengirimannya cuma sehari sampai!"</p>
                <div class="mt-8 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-blue-100 overflow-hidden">
                        <img src="https://i.pravatar.cc/150?u=1" alt="User">
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Budi Santoso</h4>
                        <p class="text-xs text-slate-400">Backend Engineer</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 relative group hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="200">
                <p class="text-slate-600 italic leading-relaxed">"Koleksi buku UI/UX-nya sangat update. Adminnya juga fast response pas ditanya soal stok. Recommended!"</p>
                <div class="mt-8 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-pink-100 overflow-hidden">
                        <img src="https://i.pravatar.cc/150?u=2" alt="User">
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Siti Aminah</h4>
                        <p class="text-xs text-slate-400">Product Designer</p>
                    </div>
                </div>
            </div>

            <div class="bg-white p-8 rounded-[2.5rem] shadow-xl shadow-slate-200/50 border border-slate-100 relative group hover:-translate-y-2 transition-all duration-500" data-aos="fade-up" data-aos-delay="300">
                <p class="text-slate-600 italic leading-relaxed">"Gak nyangka bisa nemu buku Design Patterns edisi terbaru di sini. Harganya juga bersaing banget sama toko sebelah."</p>
                <div class="mt-8 flex items-center gap-4">
                    <div class="w-12 h-12 rounded-full bg-green-100 overflow-hidden">
                        <img src="https://i.pravatar.cc/150?u=3" alt="User">
                    </div>
                    <div>
                        <h4 class="font-bold text-slate-900">Rizky Pratama</h4>
                        <p class="text-xs text-slate-400">Fullstack Developer</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="py-24 bg-white">
    <div class="container mx-auto px-6">
        <div class="bg-primary rounded-[3.5rem] p-10 md:p-20 text-center text-white relative overflow-hidden shadow-2xl shadow-blue-900/40" data-aos="zoom-in-up">
            <div class="relative z-10">
                <span class="bg-accent/20 text-accent px-6 py-2 rounded-full text-xs font-black uppercase tracking-[0.2em] border border-accent/30">Newsletter</span>
                <h2 class="mt-8 text-4xl md:text-5xl font-black leading-tight italic uppercase">Dapatkan Promo <br> <span class="text-accent italic">VIP Member!</span></h2>
                <p class="mt-6 text-slate-400 max-w-lg mx-auto text-lg">Daftarkan emailmu sekarang dan dapatkan voucher diskon 20% untuk pembelian pertamamu.</p>
                
                <form class="mt-12 max-w-lg mx-auto flex flex-col md:flex-row gap-4">
                    <input type="email" placeholder="Masukkan email aktif kamu..." 
                        class="flex-1 px-8 py-5 rounded-2xl bg-white/10 border border-white/10 text-white placeholder:text-slate-500 focus:outline-none focus:ring-2 focus:ring-accent focus:bg-white/20 transition-all text-lg backdrop-blur-md">
                    <button class="bg-accent text-white px-10 py-5 rounded-2xl font-black uppercase tracking-widest hover:bg-blue-700 transition-all shadow-xl shadow-accent/30 active:scale-95">
                        Gabung
                    </button>
                </form>
                
                <p class="mt-6 text-[10px] text-slate-500 uppercase tracking-widest font-bold">Kami menjaga privasi anda. Tidak ada spam, hanya ilmu bermanfaat.</p>
            </div>
            
            <div class="absolute top-0 right-0 w-96 h-96 bg-accent/20 rounded-full -mr-32 -mt-32 blur-[100px]"></div>
            <div class="absolute bottom-0 left-0 w-96 h-96 bg-blue-500/10 rounded-full -ml-32 -mb-32 blur-[100px]"></div>
            <div class="absolute top-1/2 left-10 w-2 h-2 bg-accent rounded-full animate-ping"></div>
            <div class="absolute bottom-1/2 right-10 w-2 h-2 bg-accent rounded-full animate-bounce"></div>
        </div>
    </div>
</section>

    <footer class="bg-primary text-slate-400 py-16 px-6">
        <div class="container mx-auto grid md:grid-cols-4 gap-12">
            <div class="col-span-2">
                <a href="#" class="text-2xl font-bold text-white tracking-tighter">BookStore.</a>
                <p class="mt-6 max-w-sm">Platform edukasi buku teknis terdepan di Indonesia. Kami membantu developer naik kelas setiap hari.</p>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Navigasi</h4>
                <ul class="space-y-4 text-sm">
                    <li><a href="#" class="hover:text-white transition-colors">Catalog</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">Best Sellers</a></li>
                    <li><a href="#" class="hover:text-white transition-colors">About Us</a></li>
                </ul>
            </div>
            <div>
                <h4 class="text-white font-bold mb-6">Sosial Media</h4>
                <div class="flex space-x-4">
                    <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-accent cursor-pointer transition-all">FB</div>
                    <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-accent cursor-pointer transition-all">IG</div>
                    <div class="w-10 h-10 rounded-full bg-slate-800 flex items-center justify-center hover:bg-accent cursor-pointer transition-all">GH</div>
                </div>
            </div>
        </div>
        <div class="container mx-auto border-t border-slate-800 mt-16 pt-8 text-center text-xs">
            &copy; 2026 BookStore Inc. Crafted with passion for Developers.
        </div>
    </footer>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            AOS.init({ duration: 800, once: true });

            // Fungsionalitas Search Real-time
            const searchInput = document.getElementById('bookSearch');
            const bookCards = document.querySelectorAll('.book-card');
            const noResults = document.getElementById('noResults');

            searchInput.addEventListener('input', function(e) {
                const term = e.target.value.toLowerCase();
                let hasMatch = false;

                bookCards.forEach(card => {
                    const title = card.getAttribute('data-title');
                    const category = card.getAttribute('data-category');

                    if (title.includes(term) || category.includes(term)) {
                        card.style.display = 'block';
                        hasMatch = true;
                    } else {
                        card.style.display = 'none';
                    }
                });

                noResults.style.display = hasMatch ? 'none' : 'block';
            });
        });
    </script>
</body>
</html>