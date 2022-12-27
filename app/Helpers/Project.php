<?php

namespace App\Helpers;

use Carbon\Carbon;
use Illuminate\Support\Facades\Vite;

class Project{
    static string $period_date_format = 'M, Y';

    public string $name;
    public ?string $company;
    public string $description;

    public array $technologies;

    public Carbon $start_date;
    public ?Carbon $end_date;

    public ?string $project_url;
    public ?array $images_urls;

    public function __construct(string $name, ?string $company, string $description, array $technologies, Carbon $start_date, ?Carbon $end_date = null, ?string $project_url = null, ?array $images_urls = null){
        $this->name = $name;
        $this->company = $company;
        $this->project_url = $project_url;
        $this->images_urls = $images_urls;
        $this->description = $description;
        $this->technologies = $technologies;
        $this->start_date = $start_date;
        $this->end_date = $end_date;
    }

    public function getFormattedProjectPeriod(): string{
        if($this->end_date != null && $this->start_date->isSameMonth($this->end_date)){
            return $this->start_date->format('d') . '-' . $this->end_date->format('d') . $this->start_date->format(' M, Y');
        }
        return $this->start_date->format(self::$period_date_format) . ' - ' . ($this->end_date != null ? $this->end_date->format(self::$period_date_format): 'Present');
    }

    public function getTrimmedDescription(int $max_length = 140): string{
        return strlen($this->description) > $max_length?
            mb_substr($this->description,0, $max_length - 3, 'UTF-8') . "...":
            $this->description;
    }

    static function get_all(): array{
        return[
            new self(
                name: 'This Website',
                company: null,
                description: "This site was created to showcase some of my most notable projects from the past four years. While many of my previous projects are not publicly available due to company policies or other reasons, this website serves as a representation of my coding skills and abilities.",
                technologies: [
                    'PHP (Laravel)',
                    'Livewire',
                    'AlpineJS',
                    'AnimeJS',
                    'Tailwind CSS',
                    'ViteJS'
                ],
                start_date: Carbon::create(2022, 12, 21),
                end_date: Carbon::create(2022, 12, 26),
                project_url: route('landing'),
                images_urls: [Vite::asset('resources/images/projects/1_this.webp')],
            ),
            new self(
                name: 'Customer Portal',
                company: null,
                description: "The customer portal is a platform that brings together all developed products in one place, making it easy for customers to access and manage their subscriptions. The portal features an onboarding process that utilizes Stripe recurring billing, as well as sub-user management and access to custom access for the company support team.",
                technologies: [
                    'PHP (Laravel)',
                    'MySQL',
                    'Livewire',
                    'Stripe',
                    'AlpineJS',
                    'AnimeJS',
                    'Tailwind CSS',
                    'Webpack Mix'
                ],
                start_date: Carbon::create(2022, 11, 22),
                end_date: Carbon::create(2022, 12, 20),
                images_urls: [
                    Vite::asset('resources/images/projects/1_customer_portal.webp'),
                    Vite::asset('resources/images/projects/2_customer_portal.webp'),
                    Vite::asset('resources/images/projects/3_customer_portal.webp')
                ],
            ),
            new self(
                name: 'Riveticket',
                company: null,
                description: "Riveticket is a project that aims to revolutionize the way ticket verification is done at event spaces. By using NFC technology and the power of blockchain, Riveticket aims to provide a fast and secure method for verifying tickets at events. As a Co-Founder of the project, I have been actively working on developing the MVPs for both the client and event spaces, with plans to begin testing in late Q1 or early Q2 of 2023. In addition to working on the technical aspects of the project, I have also been managing the administration and commercial relationships with hardware suppliers from around the world.",
                technologies: [
                    'PHP (Laravel)',
                    'Flutter',
                    'MySQL',
                    'Livewire',
                    'AlpineJS',
                    'Tailwind CSS',
                    'Vite'
                ],
                start_date: Carbon::create(2022, 10, 5),
                project_url: 'https://riveticket.io',
                images_urls: [
                    Vite::asset('resources/images/projects/1_riveticket.webp'),
                    Vite::asset('resources/images/projects/2_riveticket.webp'),
                    Vite::asset('resources/images/projects/3_riveticket.webp'),
                ],
            ),
            new self(
                name: 'ProScan+ (Support)',
                company: 'Smoothlink',
                description: "I have provided ongoing support and maintenance for the ProScan+ product, including implementing new features to meet the evolving needs of clients and addressing any bugs that arise. As part of my role, I have supervised the development of the product and ensured its smooth operation.",
                technologies: [
                    'PHP (Laravel)',
                    'OCR API',
                    'MySQL',
                    'Livewire',
                    'AlpineJS',
                    'Swal2',
                    'Tailwind CSS',
                    'Webpack Mix'
                ],
                start_date: Carbon::create(2022, 2, 29),
                end_date: Carbon::create(2022, 11, 22),
                project_url: 'https://marketplace.procore.com/apps/pro-scan-by-smoothlink',
                images_urls: [
                    Vite::asset('resources/images/projects/1_scan_plus.webp'),
                    Vite::asset('resources/images/projects/2_scan_plus.webp'),
                    Vite::asset('resources/images/projects/3_scan_plus.webp')
                ],
            ),
            new self(
                name: 'Certifana',
                company: null,
                description: "Certifana is a SaaS (Software as a Service) platform that verifies community belonging on the Solana Blockchain.\nIt securely integrates with Solana Wallets using cryptographic signing and JWT (JSON Web Token) to prevent wallet ownership spoofing. As part of the project, I also optimized blockchain integrations that have direct cost implications and established business relationships with leading RPC (Remote Procedure Call) node providers in the blockchain industry.",
                technologies: [
                    'PHP (Laravel)',
                    'TypeScript',
                    'MySQL',
                    'Livewire',
                    'Solana',
                    'AlpineJS',
                    'DiscordJS',
                    'Tailwind CSS',
                    'Webpack Mix'
                ],
                start_date: Carbon::create(2022, 5, 23),
                end_date: Carbon::create(2022, 10, 5),
                project_url: 'https://certifana.io',
                images_urls: [
                    Vite::asset('resources/images/projects/1_certifana.webp'),
                    Vite::asset('resources/images/projects/2_certifana.webp')
                ],
            ),
            new self(
                name: 'Browser Extension',
                company: 'Smoothlink',
                description: "The browser extension provides visual indicators of the invoice integration status between Procore (Construction Management Software) and Xero (Accounting Software).",
                technologies: [
                    'TypeScript',
                    'Swal2',
                    'Tailwind CSS',
                    'Webpack Mix'
                ],
                start_date: Carbon::create(2022, 4, 19),
                end_date: Carbon::create(2022, 4, 25),
                images_urls: [
                    Vite::asset('resources/images/projects/1_smoothlink_extension.webp'),
                ],
            ),
            new self(
                name: 'Puppeteer Crawler',
                company: 'Smoothlink',
                description: "The Puppeteer Crawler is a tool that crawls Procore & Xero webpages and extracts information to provide reports to clients. It was developed using Puppeteer on a NodeJS server, with API endpoints built using Express. The JavaScript code was written in TypeScript.",
                technologies: [
                    'TypeScript',
                    'Puppeteer',
                    'Express',
                    'NodeJS'
                ],
                start_date: Carbon::create(2022, 3, 6),
                end_date: Carbon::create(2022, 3, 8),
                images_urls: [Vite::asset('resources/images/projects/1_puppeteer.webp')],
            ),
            new self(
                name: 'Flaming Galahs',
                company: null,
                description: "Flaming Galahs is a student-centered community that promotes entrepreneurship and technology. As a engineer on the founding team, I have designed and maintained the Flaming Galahs website and Discord bot. The website features a landing page that introduces the Flaming Galahs team and community, and also offers free NFT minting for community members. The Discord bot, written in TypeScript, encourages community engagement by rewarding members for interacting with one another. It also integrates various APIs and RPCs.",
                technologies: [
                    'PHP (Laravel)',
                    'TypeScript',
                    'MySQL',
                    'Solana',
                    'ThreeJS',
                    'ReactJS',
                    'DiscordJS',
                    'Tailwind CSS',
                    'Webpack Mix'
                ],
                start_date: Carbon::create(2022, 2, 23),
                project_url: 'https://galah.community',
                images_urls: [
                    Vite::asset('resources/images/projects/1_flaming_galahs.webp'),
                ],
            ),
            new self(
                name: 'ProScan+',
                company: 'Smoothlink',
                description: "ProScan+ is a financial technology product that enables companies to streamline their invoicing/receipt management process by scanning and processing documents directly through Procore, a construction management software. As project supervisor, I was responsible for not only the development and overseeing the development of ProScan+, but also establishing partnerships with optical character recognition (OCR) API providers and integrating their APIs into the product.",
                technologies: [
                    'PHP (Laravel)',
                    'OCR API',
                    'MySQL',
                    'Livewire',
                    'AlpineJS',
                    'Swal2',
                    'Tailwind CSS',
                    'Webpack Mix'
                ],
                start_date: Carbon::create(2021, 11, 29),
                end_date: Carbon::create(2022, 1, 15),
                project_url: 'https://marketplace.procore.com/apps/pro-scan-by-smoothlink',
                images_urls: [
                    Vite::asset('resources/images/projects/1_scan_plus.webp'),
                    Vite::asset('resources/images/projects/2_scan_plus.webp'),
                    Vite::asset('resources/images/projects/3_scan_plus.webp')
                ],
            ),
            new self(
                name: 'Xero Integration',
                company: 'Smoothlink',
                description: "Smoothlink's Xero Integration is a financial technology product that connects Procore (a construction management software) and Xero (an accounting software). I was part of the lead development team to perform a complete overhaul of this integration, using Laravel as the primary framework. The rest of the team has since taken on the ongoing maintenance and support of this project, which is now Smoothlink's leading product.",
                technologies: [
                    'PHP (Laravel)',
                    'MySQL',
                    'Livewire',
                    'AlpineJS',
                    'Swal2',
                    'Tailwind CSS',
                    'Webpack Mix'
                ],
                start_date: Carbon::create(2020, 9, 22),
                end_date: Carbon::create(2020, 11, 25),
                project_url: 'https://marketplace.procore.com/apps/accounting-xero-connector',
                images_urls: [
                    Vite::asset('resources/images/projects/1_xero_integration.webp'),
                    Vite::asset('resources/images/projects/2_xero_integration.webp')
                ]
            ),
            new self(
                name: 'Ultimate FTC Scout',
                company: null,
                description: 'The Ultimate FTC Scout app is the result of a partnership with the RoboKings Team. Its goal is to provide a tool for all First Tech Challenge teams to record match results and scout other teams. To achieve this, I developed a Flutter app that integrates with a companion Wordpress website that supports cloud storage and memberships. I additionally implemented Google AdMob to generate revenue from free users.',
                technologies: [
                    'Flutter',
                    'Wordpress',
                    'MySQL',
                ],
                start_date: Carbon::create(2018, 11, 22),
                end_date: Carbon::create(2020, 1, 12),
                images_urls: [Vite::asset('resources/images/projects/1_ultimateftcscout.webp')]
            ),
        ];
    }
}
