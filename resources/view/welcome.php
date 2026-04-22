<x-main-layout>
    <div class="min-h-screen bg-slate-950 text-slate-100">
        <div class="relative isolate overflow-hidden">
            <div class="absolute inset-0 -z-10 bg-[radial-gradient(circle_at_top,rgba(56,189,248,0.18),transparent_34%),radial-gradient(circle_at_bottom_right,rgba(34,197,94,0.14),transparent_28%),linear-gradient(180deg,#020617_0%,#0f172a_100%)]"></div>
            <div class="absolute inset-x-0 top-0 -z-10 h-px bg-white/10"></div>

            <section class="mx-auto flex max-w-7xl flex-col gap-16 px-6 pb-20 pt-16 sm:px-8 lg:px-10 lg:pb-24 lg:pt-20">
                <div class="mx-auto max-w-3xl text-center">
                    <div class="mb-6 inline-flex items-center gap-2 rounded-full border border-cyan-400/20 bg-cyan-400/10 px-4 py-2 text-sm font-medium text-cyan-200 shadow-lg shadow-cyan-950/20">
                        <span class="h-2 w-2 rounded-full bg-cyan-300"></span>
                        Build faster with a clean, simple framework
                    </div>

                    <h1 class="text-4xl font-semibold tracking-tight text-white sm:text-5xl lg:text-6xl">
                        Welcome to <?= e(app_name()) ?>
                    </h1>

                    <p class="mt-6 text-base leading-8 text-slate-300 sm:text-lg">
                        A lightweight framework starter with routing, views, components, migrations, and Tailwind ready out of the box.
                        This page is the default home for new projects, designed to give you a clear next step.
                    </p>

                    <div class="mt-8 flex flex-col items-center justify-center gap-3 sm:flex-row">
                        <a href="#getting-started" class="inline-flex items-center justify-center rounded-xl bg-cyan-400 px-5 py-3 text-sm font-semibold text-slate-950 transition hover:bg-cyan-300">
                            Get started
                        </a>
                        <a href="/docs" class="inline-flex items-center justify-center rounded-xl border border-white/10 bg-white/5 px-5 py-3 text-sm font-semibold text-white transition hover:border-white/20 hover:bg-white/10">
                            View docs
                        </a>
                    </div>
                </div>

                <div class="grid gap-4 md:grid-cols-3">
                    <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-slate-950/30 backdrop-blur">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-cyan-400/15 text-cyan-200 ring-1 ring-cyan-400/20">
                            01
                        </div>
                        <h2 class="text-lg font-semibold text-white">Routes</h2>
                        <p class="mt-3 text-sm leading-7 text-slate-300">
                            Define application entry points in the routing layer and keep controllers focused on behavior.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-slate-950/30 backdrop-blur">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-emerald-400/15 text-emerald-200 ring-1 ring-emerald-400/20">
                            02
                        </div>
                        <h2 class="text-lg font-semibold text-white">Views</h2>
                        <p class="mt-3 text-sm leading-7 text-slate-300">
                            Render reusable templates from the resources folder and compose pages with simple, readable markup.
                        </p>
                    </div>

                    <div class="rounded-2xl border border-white/10 bg-white/5 p-6 shadow-2xl shadow-slate-950/30 backdrop-blur">
                        <div class="mb-4 flex h-11 w-11 items-center justify-center rounded-xl bg-amber-400/15 text-amber-200 ring-1 ring-amber-400/20">
                            03
                        </div>
                        <h2 class="text-lg font-semibold text-white">Components</h2>
                        <p class="mt-3 text-sm leading-7 text-slate-300">
                            Keep UI pieces small and reusable so headers, cards, and layouts stay consistent across the app.
                        </p>
                    </div>
                </div>

                <div id="getting-started" class="grid gap-6 lg:grid-cols-[1.2fr_0.8fr]">
                    <div class="rounded-3xl border border-white/10 bg-slate-900/80 p-8 shadow-2xl shadow-slate-950/40 backdrop-blur">
                        <h2 class="text-2xl font-semibold text-white">A simple starting point</h2>
                        <p class="mt-4 max-w-2xl text-sm leading-7 text-slate-300">
                            Use this page as the first screen of your framework and swap in your own branding, navigation, and feature sections as the project grows.
                        </p>

                        <div class="mt-8 grid gap-4 sm:grid-cols-2">
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Project structure</p>
                                <p class="mt-3 text-sm leading-7 text-slate-200">
                                    Views live in resources/view, layouts in resources/layouts, and routes in routes/web.php.
                                </p>
                            </div>
                            <div class="rounded-2xl border border-white/10 bg-white/5 p-5">
                                <p class="text-xs font-semibold uppercase tracking-[0.2em] text-slate-400">Styling</p>
                                <p class="mt-3 text-sm leading-7 text-slate-200">
                                    Tailwind is loaded through the main layout, so utility classes are ready to use immediately.
                                </p>
                            </div>
                        </div>
                    </div>

                    <div class="rounded-3xl border border-cyan-400/20 bg-cyan-400/10 p-8 shadow-2xl shadow-cyan-950/20 backdrop-blur">
                        <p class="text-xs font-semibold uppercase tracking-[0.2em] text-cyan-200">Next step</p>
                        <h2 class="mt-3 text-2xl font-semibold text-white">Replace this content with your app's real homepage.</h2>
                        <p class="mt-4 text-sm leading-7 text-cyan-50/80">
                            Add your product message, onboarding path, or dashboard entry point here once the framework is connected to your domain.
                        </p>

                        <div class="mt-8 rounded-2xl border border-white/10 bg-slate-950/40 p-4 text-sm text-slate-200">
                            <div class="flex items-center justify-between border-b border-white/10 pb-3">
                                <span class="font-medium text-white">Suggested files</span>
                                <span class="text-xs text-slate-400">Tailwind ready</span>
                            </div>
                            <ul class="mt-3 space-y-2 text-slate-300">
                                <li>resources/view/welcome.php</li>
                                <li>resources/layouts/main-layout.php</li>
                                <li>routes/web.php</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </section>
        </div>
    </div>
</x-main-layout>