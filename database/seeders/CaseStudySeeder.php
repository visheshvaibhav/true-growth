<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\CaseStudy;
use App\Models\Technology;
use App\Models\ProcessStep;
use App\Models\KeyMetric;
use App\Models\Testimonial;

class CaseStudySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Create a sample case study
        $caseStudy = CaseStudy::create([
            'title' => 'AI-Powered Analytics Platform',
            'slug' => 'ai-analytics-platform',
            'category' => 'AI & Machine Learning',
            'timeframe' => '6 months',
            'roi' => '300% ROI',
            'team_size' => '8 members',
            'completion_date' => '2024-02-15',
            'overview' => 'Developed a cutting-edge analytics platform that leverages AI to provide real-time insights and predictive analytics for e-commerce businesses.',
            'client_description' => 'A leading e-commerce platform serving over 1 million customers worldwide.',
            'challenge' => 'The client needed to process and analyze massive amounts of customer data in real-time to provide personalized recommendations and detect fraud patterns.',
            'solution' => 'We implemented a scalable AI solution using TensorFlow and AWS services to process data in real-time and provide actionable insights.',
            'detailed_results' => 'The platform achieved 99.9% uptime, processed over 1 million transactions per day, and improved fraud detection by 85%.'
        ]);

        // Add technologies
        $caseStudy->technologies()->createMany([
            [
                'name' => 'TensorFlow',
                'icon' => '/images/tech/tensorflow.svg',
                'purpose' => 'Machine Learning Model Training'
            ],
            [
                'name' => 'AWS',
                'icon' => '/images/tech/aws.svg',
                'purpose' => 'Cloud Infrastructure'
            ],
            [
                'name' => 'Python',
                'icon' => '/images/tech/python.svg',
                'purpose' => 'Backend Development'
            ]
        ]);

        // Add process steps
        $caseStudy->processSteps()->createMany([
            [
                'title' => 'Requirements Analysis',
                'description' => 'Conducted thorough analysis of client needs and existing systems.',
                'order' => 1
            ],
            [
                'title' => 'Architecture Design',
                'description' => 'Designed scalable cloud architecture and AI pipeline.',
                'order' => 2
            ],
            [
                'title' => 'Development & Testing',
                'description' => 'Implemented the solution with continuous testing and validation.',
                'order' => 3
            ]
        ]);

        // Add key metrics
        $caseStudy->keyMetrics()->createMany([
            [
                'value' => '85%',
                'label' => 'Improved Fraud Detection'
            ],
            [
                'value' => '99.9%',
                'label' => 'Platform Uptime'
            ],
            [
                'value' => '1M+',
                'label' => 'Daily Transactions'
            ]
        ]);

        // Add testimonial
        $caseStudy->testimonial()->create([
            'name' => 'John Smith',
            'position' => 'CTO, E-commerce Platform',
            'avatar' => '/images/testimonials/john-smith.jpg',
            'quote' => 'The True Growth Co. delivered an exceptional AI solution that transformed our business. The platform\'s performance exceeded our expectations.'
        ]);
    }
} 