<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Support\Arr;

class SolutionController extends Controller
{
    private const SERVICES = [
        'web-saas' => [
            'eyebrow' => '01 / Digital products',
            'title' => 'Modern Web & SaaS Development',
            'description' => 'Custom web platforms designed around your workflows, customers, and growth plans—from first release through scale.',
            'capabilities' => ['Laravel and React applications', 'High-performance marketing and customer platforms', 'Headless CMS and API-first architectures', 'Accessible, responsive design systems'],
            'technology' => 'Laravel · PHP · React · Tailwind CSS',
        ],
        'ai-workflows' => [
            'eyebrow' => '02 / Applied intelligence',
            'title' => 'Autonomous AI Assistants & Workflows',
            'description' => 'Purpose-built AI that connects to your business data, supports human decisions, and automates repeatable workflows.',
            'capabilities' => ['LLM integrations and assistant experiences', 'Retrieval-augmented generation and vector search', 'Natural-language reporting with governed data access', 'CRM qualification and workflow automation'],
            'technology' => 'Python · OpenAI · RAG · REST APIs · Vector databases',
        ],
        'enterprise-erp' => [
            'eyebrow' => '03 / Core business systems',
            'title' => 'Custom Enterprise ERPs & Core Engines',
            'description' => 'Secure, maintainable business software that brings operational data, teams, and processes together.',
            'capabilities' => ['Multi-tenant SaaS and isolated data models', 'Custom ERP, POS, and operational workflows', 'Webhook-driven integrations and API design', 'Reporting, roles, and audit-ready foundations'],
            'technology' => 'MySQL · PostgreSQL · Laravel · REST APIs',
        ],
        'managed-operations' => [
            'eyebrow' => '04 / Continuous operations',
            'title' => 'Managed Technical Operations',
            'description' => 'A practical human-plus-automation layer to keep your CRM workflows, data pipelines, and technical operations organized.',
            'capabilities' => ['CRM hygiene and lead-quality review', 'Data-pipeline and integration monitoring', 'Follow-up sequence operations', 'Workflow documentation and ongoing optimization'],
            'technology' => 'CRM automation · Workflow optimization · Technical VAs',
        ],
    ];

    public function show(string $service): View
    {
        abort_unless(Arr::exists(self::SERVICES, $service), 404);

        return view('solutions.show', ['service' => self::SERVICES[$service]]);
    }
}
