<?php

namespace App\Http\Controllers;

use App\Models\AuditRequest;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Validation\Rule;

class AuditRequestController extends Controller
{
    public function store(Request $request): RedirectResponse
    {
        $validated = $request->validate([
            'name' => ['required', 'string', 'max:120'],
            'email' => ['required', 'string', 'email:rfc', 'max:255'],
            'company' => ['required', 'string', 'max:160'],
            'tech_stack' => ['required', Rule::in(['Laravel', 'PHP', 'React', 'Python', 'MySQL', 'PostgreSQL', 'OpenAI', 'AWS', 'Other'])],
            'need' => ['required', Rule::in(['web', 'ai', 'erp', 'managed-ops', 'full-bundle'])],
            'budget' => ['required', Rule::in(['under-10k', '10k-25k', '25k-50k', '50k-plus', 'undetermined'])],
        ]);

        AuditRequest::create($validated);

        return redirect()->to(route('home').'#audit-request')
            ->with('status', 'Your audit request is in. Our team will be in touch soon.');
    }
}
