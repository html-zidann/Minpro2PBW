<!doctype html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portfolio Zidan</title>
    
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css-portofolio.css">
</head>

<body>
<div id="app" v-cloak>

    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top shadow">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">Portofolio Zidan CEO Ganteng</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navMenu">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navMenu">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item"><a class="nav-link" href="#home">Home</a></li>
                    <li class="nav-item"><a class="nav-link" href="#about">About</a></li>
                    <li class="nav-item"><a class="nav-link" href="#certificates">Certificates</a></li>
                </ul>
            </div>
        </div>
    </nav>

    <section id="home" class="hero-section text-center text-white">
        <div class="overlay"></div>
        
        <div class="hero-content container">
            <img :src="profile.foto ? 'assets/img/' + profile.foto : 'https://via.placeholder.com/220'" 
                 alt="Foto Profil" class="profile-img mb-4">
            
            <h1 class="hero-title">Hi all, Nama saya {{ profile.nama }}</h1>
            <p class="hero-tagline">{{ profile.tagline }}</p>
            
            <a href="#about" class="btn btn-primary btn-lg mt-4 px-5 rounded-pill shadow">
                Lihat Selengkapnya
            </a>
        </div>
    </section>

    <section id="about" class="py-5">
        <div class="container">
            <div class="row g-5 align-items-start">
                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">About Me</h2>
                    <p class="text-muted mb-5" style="line-height: 1.8;">
                        {{ profile.deskripsi }}
                    </p>

                    <h4 class="fw-bold mb-3">Experience</h4>
                    <div class="list-group shadow-sm">
                        <div v-for="exp in experiences" class="list-group-item py-3">
                            <i class="bi bi-briefcase-fill text-primary me-2"></i> {{ exp.judul }}
                        </div>
                    </div>
                </div>

                <div class="col-lg-6">
                    <h2 class="fw-bold mb-4">Technical Skills</h2>
                    <div v-for="skill in skills" class="mb-4">
                        <div class="d-flex justify-content-between mb-2">
                            <span class="fw-bold text-dark">{{ skill.nama }}</span>
                            <span class="badge bg-primary">{{ skill.level }}%</span>
                        </div>
                        <div class="progress" style="height: 10px; border-radius: 5px;">
                            <div class="progress-bar progress-bar-striped progress-bar-animated" 
                                 :style="{ width: skill.level + '%' }">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section id="certificates" class="py-5 bg-light">
        <div class="container">
            <h2 class="fw-bold text-center mb-5">Certificates</h2>
            <div class="row g-4">
                <div class="col-md-4" v-for="cert in certificates">
                    <div class="card h-100 border-0 shadow-sm">
                        <img :src="'assets/img/' + cert.gambar" class="card-img-top" 
                             style="height: 200px; object-fit: cover;" alt="Certificate">
                        <div class="card-body">
                            <h5 class="card-title fw-bold text-dark">{{ cert.judul }}</h5>
                            <p class="card-text text-secondary">{{ cert.instansi }}</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <footer class="py-5 bg-dark text-white text-center">
        <div class="container">
            <p class="mb-0 opacity-75">&copy; 2024 {{ profile.nama }}. Built with Vue & Bootstrap.</p>
        </div>
    </footer>

</div>

<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
<script src="https://unpkg.com/vue@3"></script>

<script>
const { createApp } = Vue;

createApp({
    data(){
        return {
            profile: { nama: "", foto: "", tagline: "", deskripsi: "" },
            experiences: [],
            skills: [],
            certificates: []
        }
    },
    mounted(){
        this.loadData();
    },
    methods: {
        async loadData() {
            try {
                const [p, e, s, c] = await Promise.all([
                    fetch('/api/profile.php').then(r => r.json()),
                    fetch('/api/experience.php').then(r => r.json()),
                    fetch('/api/skills.php').then(r => r.json()),
                    fetch('/api/certificate.php').then(r => r.json())
                ]);
                this.profile = p;
                this.experiences = e;
                this.skills = s;
                this.certificates = c;
            } catch (err) {
                console.error("Gagal memuat data API:", err);
            }
        }
    }
}).mount('#app');
</script>
</body>
</html>