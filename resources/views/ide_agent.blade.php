@php
    $mode = $mode ?? (request('mode') ?? session('theme_mode', 'light'));
    $isDark = ($mode === 'dark');
@endphp

<x-layouts.app title="MAGENTIC — The Next Generation of Web-Based Collaborative Development" :mode="$mode">

    <!-- ========================================================================= -->
    <!-- HERO SECTION: MAGENTIC PLATFORM                                           -->
    <!-- ========================================================================= -->
    <section class="relative py-16 lg:py-24 overflow-hidden border-b border-slate-200/80 dark:border-slate-800 bg-gradient-to-b from-blue-50/50 via-white to-slate-50 dark:from-slate-950 dark:via-slate-900 dark:to-slate-950 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center flex flex-col items-center">

            <!-- Subtitle Badge -->
            <span class="text-xs font-semibold tracking-wider uppercase text-slate-500 dark:text-slate-400 mb-3 block">
                The Next Generation of Web-Based Collaborative Development
            </span>

            <!-- Main Title -->
            <h1 class="text-6xl sm:text-7xl lg:text-8xl font-black tracking-tight mb-2 text-slate-900 dark:text-white">
                MAGENTIC
            </h1>

            <!-- Slogan -->
            <p class="text-sm sm:text-base font-bold tracking-widest uppercase mb-4 text-slate-500 dark:text-slate-400">
                MAJESTIC IN EVERY LINE.
            </p>

            <!-- Description -->
            <p class="text-sm sm:text-base lg:text-lg max-w-3xl mb-10 leading-relaxed text-slate-600 dark:text-slate-400">
                A collaborative web-based development environment powered by autonomous Agentic AI, seamlessly integrated with GitHub and real-time multiplayer editing.
            </p>

            <!-- Call to Actions -->
            <div class="flex flex-wrap gap-3 justify-center mb-14">
                <a href="#features"
                    class="px-6 py-3 rounded-xl bg-its-accent hover:bg-its-blue text-white font-semibold text-xs text-center shadow-lg shadow-blue-500/25 transition duration-200 flex items-center gap-2">
                    <i class="fa-solid fa-layer-group"></i> Explore Features
                </a>
                <a href="#architecture"
                    class="px-6 py-3 rounded-xl bg-white hover:bg-slate-50 text-slate-800 border-slate-200 dark:bg-slate-800 dark:hover:bg-slate-700 dark:text-slate-200 dark:border-slate-700 border font-semibold text-xs text-center shadow-xs transition duration-200 flex items-center gap-2">
                    <i class="fa-solid fa-diagram-project"></i> View Architecture
                </a>
                <a href="#form-ide"
                    class="px-6 py-3 rounded-xl bg-indigo-50 dark:bg-indigo-950/70 border border-indigo-200 dark:border-indigo-800 text-indigo-700 dark:text-indigo-300 hover:bg-indigo-100 font-semibold text-xs text-center shadow-xs transition duration-200 flex items-center gap-2">
                    <i class="fa-solid fa-lightbulb text-amber-500"></i> Idea Submission Form <span class="sr-only">Formulir Pengumpulan Ide</span>
                </a>
            </div>

            <!-- ================================================================= -->
            <!-- INTERACTIVE MULTIPLAYER CODE EDITOR & COPILOT MOCKUP              -->
            <!-- ================================================================= -->
            <div id="editor-preview" class="w-full max-w-5xl rounded-2xl border border-slate-700/80 dark:border-slate-800 shadow-2xl dark:shadow-blue-950/50 overflow-hidden text-left bg-[#1e1e1e]">

                <!-- Window Top Header / Active Collaborators -->
                <div class="bg-[#2d2d2d] px-4 py-3 flex flex-wrap justify-between items-center border-b border-gray-700 gap-2 shrink-0">
                    <div class="flex items-center gap-3">
                        <div class="flex gap-2">
                            <div class="w-3 h-3 rounded-full bg-[#ff5f56]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#ffbd2e]"></div>
                            <div class="w-3 h-3 rounded-full bg-[#27c93f]"></div>
                        </div>
                        <span class="text-gray-400 font-mono text-xs pl-2 border-l border-gray-600">AuthController.php</span>
                    </div>

                    <!-- Collaborator Pills: Arda, Aji, Agent Copilot -->
                    <div class="text-gray-300 text-xs font-mono flex items-center gap-3">
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-blue-500/20 text-blue-300 border border-blue-500/30">
                            <span class="w-2 h-2 rounded-full bg-blue-400"></span> Arda
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-amber-500/20 text-amber-300 border border-amber-500/30">
                            <span class="w-2 h-2 rounded-full bg-amber-400"></span> Aji
                        </span>
                        <span class="inline-flex items-center gap-1.5 px-2.5 py-1 rounded-full bg-emerald-500/20 text-emerald-300 border border-emerald-500/30">
                            <span class="w-2 h-2 rounded-full bg-emerald-400 animate-pulse"></span> Agent Copilot
                        </span>
                    </div>
                </div>

                <!-- Editor Body: Code View + Copilot Chat -->
                <div class="flex flex-col lg:flex-row font-mono text-xs sm:text-sm">

                    <!-- Code Editor View with Live Presence -->
                    <div class="p-6 text-gray-300 overflow-x-auto flex-1 leading-relaxed bg-[#1e1e1e]">
                        <div><span class="text-blue-400">public</span> <span class="text-blue-400">function</span> <span class="text-yellow-200">authenticate</span>(<span class="text-orange-300">Request</span> <span class="text-blue-200">$request</span>) {</div>
                        <div class="pl-6 text-gray-500 italic">// Validate incoming request</div>
                        <div class="pl-6"><span class="text-blue-200">$credentials</span> = <span class="text-blue-200">$request</span>-&gt;<span class="text-yellow-200">validate</span>([</div>
                        <div class="pl-12"><span class="text-green-300">'email'</span> =&gt; <span class="text-green-300">'required|email'</span>,</div>
                        <div class="pl-12"><span class="text-green-300">'password'</span> =&gt; <span class="text-green-300">'required'</span></div>
                        <div class="pl-6">]);</div>
                        <br>
                        <div class="pl-6 text-gray-500 italic">// Check credentials</div>
                        <div class="pl-6 relative inline-block">
                            <span class="text-blue-400">if</span> (<span class="text-teal-400">Auth</span>::<span class="text-yellow-200">attempt</span>(<span class="text-blue-200">$credentials</span>)) {
                            <span class="inline-flex items-center ml-2 bg-blue-500 text-white text-[10px] font-sans px-1.5 py-0.5 rounded shadow">
                                <span class="w-1.5 h-1.5 rounded-full bg-white animate-ping mr-1"></span> Arda
                            </span>
                        </div>
                        <div class="pl-12"><span class="text-blue-200">$request</span>-&gt;<span class="text-yellow-200">session</span>()-&gt;<span class="text-yellow-200">regenerate</span>();</div>
                        <div class="pl-12 flex items-center gap-2">
                            <span><span class="text-blue-400">return</span> <span class="text-yellow-200">redirect</span>()-&gt;</span>
                            <span class="inline-flex items-center gap-1.5 bg-amber-500/20 text-amber-300 border border-amber-500/40 text-[10px] font-sans px-2 py-0.5 rounded-full animate-pulse">
                                <span class="w-1.5 h-1.5 rounded-full bg-amber-400"></span> Aji is typing...
                            </span>
                        </div>
                        <div class="pl-6">}</div>
                        <br>
                        <div class="pl-6"><span class="text-blue-400">return</span> <span class="text-yellow-200">back</span>()-&gt;<span class="text-yellow-200">withErrors</span>([<span class="text-green-300">'email'</span> =&gt; <span class="text-green-300">'Invalid login.'</span>]);</div>
                        <div>}</div>
                    </div>

                    <!-- Copilot Sidebar Chat Panel -->
                    <div class="w-full lg:w-80 border-t lg:border-t-0 lg:border-l border-gray-700 bg-[#252526] flex flex-col font-sans text-xs">

                        <!-- Header -->
                        <div class="px-4 py-3 bg-[#2d2d2d] border-b border-gray-700 flex justify-between items-center text-gray-200">
                            <span class="font-bold flex items-center gap-2 text-white">
                                <i class="fa-solid fa-robot text-emerald-400"></i> Agent Copilot
                            </span>
                            <span class="inline-flex items-center gap-1.5 text-[10px] bg-emerald-500/20 text-emerald-400 border border-emerald-500/30 px-2 py-0.5 rounded-full font-semibold">
                                <span class="w-1.5 h-1.5 rounded-full bg-emerald-400"></span> Online
                            </span>
                        </div>

                        <!-- Chat Messages Container -->
                        <div class="p-4 flex-1 space-y-3 overflow-y-auto max-h-[300px]">

                            <!-- Arda Message -->
                            <div class="flex items-start gap-2.5">
                                <div class="w-6 h-6 rounded-full bg-blue-500 text-white font-bold text-[10px] flex items-center justify-center shrink-0">
                                    A
                                </div>
                                <div class="bg-[#1e1e1e] p-2.5 rounded-xl border border-gray-700 text-gray-300 flex-1">
                                    <span class="text-[10px] text-blue-400 font-bold block mb-0.5">Arda</span>
                                    <p class="text-[11px] leading-relaxed">Can we make sure the session regeneration is protected against fixation?</p>
                                </div>
                            </div>

                            <!-- Agent Copilot Response -->
                            <div class="flex items-start gap-2.5">
                                <div class="w-6 h-6 rounded-full bg-emerald-600 text-white font-black text-[9px] flex items-center justify-center shrink-0">
                                    AI
                                </div>
                                <div class="bg-[#1e1e1e] p-2.5 rounded-xl border border-emerald-800/50 text-gray-300 flex-1">
                                    <span class="text-[10px] text-emerald-400 font-bold block mb-0.5">Agent Copilot</span>
                                    <p class="text-[11px] leading-relaxed">
                                        Yes! Laravel's <code class="text-yellow-200 bg-black/40 px-1 py-0.5 rounded font-mono text-[10px]">Auth::attempt()</code> handles session regeneration safely out of the box.
                                    </p>
                                </div>
                            </div>

                        </div>

                        <!-- Chat Input Box -->
                        <div class="p-3 bg-[#1e1e1e] border-t border-gray-700">
                            <div class="flex items-center gap-2 mb-2">
                                <span class="px-2 py-0.5 rounded bg-gray-800 text-blue-400 text-[10px] font-mono cursor-pointer hover:bg-gray-700">@code</span>
                                <span class="px-2 py-0.5 rounded bg-gray-800 text-amber-400 text-[10px] font-mono cursor-pointer hover:bg-gray-700">#file</span>
                            </div>
                            <div class="flex items-center gap-2">
                                <input type="text" placeholder="Ask Magentic Agent..." class="w-full bg-[#2d2d2d] border border-gray-700 rounded-lg px-2.5 py-1.5 text-xs text-gray-200 focus:outline-none focus:border-blue-500">
                                <button class="px-3 py-1.5 bg-its-accent hover:bg-its-blue text-white rounded-lg text-xs font-semibold shrink-0">
                                    <i class="fa-solid fa-paper-plane"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- PROBLEM & MOTIVATION SECTION                                              -->
    <!-- ========================================================================= -->
    <section id="problem" class="scroll-mt-24 py-16 lg:py-20 border-b bg-slate-50 border-slate-200/80 dark:bg-slate-900/50 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 dark:bg-blue-950/70 text-its-accent dark:text-blue-400 border border-blue-200/80 dark:border-blue-800 shadow-2xs mb-3">
                    <i class="fa-solid fa-triangle-exclamation text-[11px]"></i> Problem &amp; Motivation
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                    A Unified Starting Point for Modern Devs
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-2.5 max-w-2xl mx-auto leading-relaxed">
                    Overcoming conventional workflow limitations by integrating code editing, team collaboration, and autonomous AI reasoning in a single platform.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-6 sm:gap-8">

                <!-- Problem 01 -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-its-accent to-its-blue group-hover:h-2 transition-all"></div>

                    <div>
                        <!-- Header: Icon & Number Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 dark:bg-blue-950/80 border border-blue-200/60 dark:border-blue-800/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300 shadow-2xs">
                                <i class="fa-solid fa-layer-group"></i>
                            </div>
                            <span class="text-xs font-black font-mono px-3 py-1 rounded-full bg-its-blue text-white shadow-xs">
                                01
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-2.5 text-slate-900 dark:text-white group-hover:text-its-accent dark:group-hover:text-blue-400 transition">
                            Fragmented Workflow
                        </h3>
                        <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-300 mb-6">
                            Code editors, GitHub repositories, AI assistants, and communication channels live in separate windows, breaking developer focus.
                        </p>
                    </div>

                    <!-- Bottom Tags -->
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex flex-wrap gap-2 text-[11px] font-medium text-slate-500 dark:text-slate-400">
                        <span class="px-2.5 py-1 rounded-lg bg-slate-50 dark:bg-slate-800/80 border border-slate-200/60 dark:border-slate-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-arrow-right-arrow-left text-[10px] text-its-accent dark:text-blue-400"></i> Context Switching
                        </span>
                        <span class="px-2.5 py-1 rounded-lg bg-slate-50 dark:bg-slate-800/80 border border-slate-200/60 dark:border-slate-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-window-restore text-[10px] text-its-accent dark:text-blue-400"></i> Window Clutter
                        </span>
                    </div>
                </div>

                <!-- Problem 02 -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-indigo-500 to-blue-600 group-hover:h-2 transition-all"></div>

                    <div>
                        <!-- Header: Icon & Number Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-14 h-14 rounded-2xl bg-indigo-50 dark:bg-indigo-950/80 border border-indigo-200/60 dark:border-indigo-800/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300 shadow-2xs">
                                <i class="fa-solid fa-robot"></i>
                            </div>
                            <span class="text-xs font-black font-mono px-3 py-1 rounded-full bg-indigo-700 text-white shadow-xs">
                                02
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-2.5 text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition">
                            Passive AI Assistants
                        </h3>
                        <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-300 mb-6">
                            Traditional AI wait for manual prompts instead of actively reasoning about code architecture and proposing proactive pull requests.
                        </p>
                    </div>

                    <!-- Bottom Tags -->
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex flex-wrap gap-2 text-[11px] font-medium text-slate-500 dark:text-slate-400">
                        <span class="px-2.5 py-1 rounded-lg bg-slate-50 dark:bg-slate-800/80 border border-slate-200/60 dark:border-slate-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-hourglass-half text-[10px] text-indigo-600 dark:text-indigo-400"></i> Manual Prompting
                        </span>
                        <span class="px-2.5 py-1 rounded-lg bg-slate-50 dark:bg-slate-800/80 border border-slate-200/60 dark:border-slate-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-eye-slash text-[10px] text-indigo-600 dark:text-indigo-400"></i> Zero Codebase Context
                        </span>
                    </div>
                </div>

                <!-- Problem 03 -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-sky-500 to-its-accent group-hover:h-2 transition-all"></div>

                    <div>
                        <!-- Header: Icon & Number Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-14 h-14 rounded-2xl bg-sky-50 dark:bg-sky-950/80 border border-sky-200/60 dark:border-sky-800/60 text-sky-600 dark:text-sky-400 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300 shadow-2xs">
                                <i class="fa-solid fa-screwdriver-wrench"></i>
                            </div>
                            <span class="text-xs font-black font-mono px-3 py-1 rounded-full bg-sky-700 text-white shadow-xs">
                                03
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-2.5 text-slate-900 dark:text-white group-hover:text-sky-600 dark:group-hover:text-sky-400 transition">
                            Complex Setup Friction
                        </h3>
                        <p class="text-xs sm:text-sm leading-relaxed text-slate-600 dark:text-slate-300 mb-6">
                            Setting up matching local environments across team members consumes valuable sprint hours that should be spent writing software.
                        </p>
                    </div>

                    <!-- Bottom Tags -->
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex flex-wrap gap-2 text-[11px] font-medium text-slate-500 dark:text-slate-400">
                        <span class="px-2.5 py-1 rounded-lg bg-slate-50 dark:bg-slate-800/80 border border-slate-200/60 dark:border-slate-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-triangle-exclamation text-[10px] text-sky-600 dark:text-sky-400"></i> Environment Drift
                        </span>
                        <span class="px-2.5 py-1 rounded-lg bg-slate-50 dark:bg-slate-800/80 border border-slate-200/60 dark:border-slate-700 flex items-center gap-1.5">
                            <i class="fa-solid fa-clock text-[10px] text-sky-600 dark:text-sky-400"></i> Onboarding Overhead
                        </span>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- ARCHITECTURE SECTION: ONE WORKSPACE FOR EVERY WORKFLOW                    -->
    <!-- ========================================================================= -->
    <section id="architecture" class="scroll-mt-24 py-16 lg:py-20 bg-white border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 border-b transition-colors duration-300">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8 text-center">

            <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 dark:bg-blue-950/70 text-its-accent dark:text-blue-400 border border-blue-200/80 dark:border-blue-800 shadow-2xs mb-3">
                <i class="fa-solid fa-diagram-project text-[11px]"></i> System Architecture
            </span>

            <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight mt-1 mb-2 text-slate-900 dark:text-white">
                One Workspace for Every Workflow
            </h2>

            <p class="text-xs sm:text-sm max-w-2xl mx-auto mb-10 text-slate-600 dark:text-slate-400">
                An interconnected architecture linking client-side Monaco Editor, backend Laravel service, GitHub API, and Autonomous Agents.
            </p>

            <div class="bg-slate-950 p-4 sm:p-8 rounded-2xl border border-slate-800 shadow-xl overflow-hidden mb-4">
                <canvas id="workspaceCanvas" class="w-full h-[380px] sm:h-[400px] block"></canvas>
            </div>

            <p class="text-xs text-slate-500 font-mono mt-2">
                Real-Time Canvas Node Network: Web Monaco IDE &bull; GitHub API &bull; Collaborators &bull; Agentic AI &bull; Laravel Backend
            </p>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- KEY FEATURES / CORE CAPABILITIES SECTION                                  -->
    <!-- ========================================================================= -->
    <section id="features" class="scroll-mt-24 py-16 lg:py-20 border-b bg-slate-50 border-slate-200/80 dark:bg-slate-900/50 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 dark:bg-blue-950/70 text-its-accent dark:text-blue-400 border border-blue-200/80 dark:border-blue-800 shadow-2xs mb-3">
                    <i class="fa-solid fa-bolt text-[11px]"></i> Core Capabilities
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                    Key Features
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-2.5 max-w-2xl mx-auto leading-relaxed">
                    Empowering software development teams with next-generation autonomous workflows.
                </p>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-6 sm:gap-8">

                <!-- Feature 1: Agentic AI Engine -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-its-accent to-its-blue group-hover:h-2 transition-all"></div>

                    <div>
                        <!-- Header: Icon & Category Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 dark:bg-blue-950/80 border border-blue-200/60 dark:border-blue-800/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300 shadow-2xs">
                                <i class="fa-solid fa-microchip"></i>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-blue-50 dark:bg-blue-950 text-its-accent dark:text-blue-300 border border-blue-200 dark:border-blue-800">
                                Autonomous
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-2.5 text-slate-900 dark:text-white group-hover:text-its-accent dark:group-hover:text-blue-400 transition">
                            Agentic AI Engine
                        </h3>
                        <p class="text-xs sm:text-sm leading-relaxed mb-6 text-slate-600 dark:text-slate-300">
                            AI that doesn't just answer questions — it analyzes codebase context, reasons through issues, and generates multi-file edits automatically.
                        </p>
                    </div>

                    <ul class="space-y-3 pt-5 border-t border-slate-100 dark:border-slate-800 text-xs sm:text-sm font-medium">
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Codebase contextual reasoning</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Autonomous bug detection</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Automated test execution</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 2: GitHub Integration -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-indigo-500 to-blue-600 group-hover:h-2 transition-all"></div>

                    <div>
                        <!-- Header: Icon & Category Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-14 h-14 rounded-2xl bg-indigo-50 dark:bg-indigo-950/80 border border-indigo-200/60 dark:border-indigo-800/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300 shadow-2xs">
                                <i class="fa-brands fa-github"></i>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                                Native Git
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-2.5 text-slate-900 dark:text-white group-hover:text-indigo-600 dark:group-hover:text-indigo-400 transition">
                            GitHub Integration
                        </h3>
                        <p class="text-xs sm:text-sm leading-relaxed mb-6 text-slate-600 dark:text-slate-300">
                            Seamlessly connect projects with GitHub repositories directly from the browser without needing complex local Git setups.
                        </p>
                    </div>

                    <ul class="space-y-3 pt-5 border-t border-slate-100 dark:border-slate-800 text-xs sm:text-sm font-medium">
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Visual Clone, Commit &amp; Push</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Branch &amp; PR management</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-indigo-100 dark:bg-indigo-900/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Real-time repo sync</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 3: Real-Time Multiplayer -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-sky-500 to-its-accent group-hover:h-2 transition-all"></div>

                    <div>
                        <!-- Header: Icon & Category Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-14 h-14 rounded-2xl bg-sky-50 dark:bg-sky-950/80 border border-sky-200/60 dark:border-sky-800/60 text-sky-600 dark:text-sky-400 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300 shadow-2xs">
                                <i class="fa-solid fa-users"></i>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-sky-50 dark:bg-sky-950 text-sky-700 dark:text-sky-300 border border-sky-200 dark:border-sky-800">
                                Multiplayer
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-2.5 text-slate-900 dark:text-white group-hover:text-sky-600 dark:group-hover:text-sky-400 transition">
                            Real-Time Multiplayer
                        </h3>
                        <p class="text-xs sm:text-sm leading-relaxed mb-6 text-slate-600 dark:text-slate-300">
                            Work on the exact same codebase with your team members simultaneously, complete with live presence cursors.
                        </p>
                    </div>

                    <ul class="space-y-3 pt-5 border-t border-slate-100 dark:border-slate-800 text-xs sm:text-sm font-medium">
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-sky-100 dark:bg-sky-900/60 text-sky-600 dark:text-sky-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Multi-user live cursor sync</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-sky-100 dark:bg-sky-900/60 text-sky-600 dark:text-sky-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>WebSocket broadcast via Laravel Reverb</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-sky-100 dark:bg-sky-900/60 text-sky-600 dark:text-sky-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Shared state preservation</span>
                        </li>
                    </ul>
                </div>

                <!-- Feature 4: Monaco Web IDE -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-7 sm:p-8 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-blue-500 to-cyan-500 group-hover:h-2 transition-all"></div>

                    <div>
                        <!-- Header: Icon & Category Badge -->
                        <div class="flex items-center justify-between mb-5">
                            <div class="w-14 h-14 rounded-2xl bg-blue-50 dark:bg-blue-950/80 border border-blue-200/60 dark:border-blue-800/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-2xl group-hover:scale-110 transition duration-300 shadow-2xs">
                                <i class="fa-solid fa-code"></i>
                            </div>
                            <span class="text-xs font-bold px-3 py-1 rounded-full bg-slate-100 dark:bg-slate-800 text-slate-700 dark:text-slate-300 border border-slate-200 dark:border-slate-700">
                                Browser IDE
                            </span>
                        </div>

                        <h3 class="text-xl font-bold mb-2.5 text-slate-900 dark:text-white group-hover:text-its-accent dark:group-hover:text-blue-400 transition">
                            Monaco Web IDE
                        </h3>
                        <p class="text-xs sm:text-sm leading-relaxed mb-6 text-slate-600 dark:text-slate-300">
                            A familiar VS Code-like editing experience running in the browser with full syntax highlighting and keyboard shortcuts.
                        </p>
                    </div>

                    <ul class="space-y-3 pt-5 border-t border-slate-100 dark:border-slate-800 text-xs sm:text-sm font-medium">
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Full file tree explorer</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>Multi-tab editing</span>
                        </li>
                        <li class="flex items-center gap-3 text-slate-700 dark:text-slate-300">
                            <span class="w-5 h-5 rounded-full bg-blue-100 dark:bg-blue-900/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-[10px] shrink-0 font-bold">
                                <i class="fa-solid fa-check"></i>
                            </span>
                            <span>In-browser terminal output</span>
                        </li>
                    </ul>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- AUTONOMOUS LOOP: NOT JUST ANY ASSISTANT                                   -->
    <!-- ========================================================================= -->
    <section class="scroll-mt-24 py-16 lg:py-20 border-b bg-white border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-5xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-12">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 dark:bg-blue-950/70 text-its-accent dark:text-blue-400 border border-blue-200/80 dark:border-blue-800 shadow-2xs mb-3">
                    <i class="fa-solid fa-arrows-spin text-[11px]"></i> Autonomous Loop
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                    Not Just Any Assistant.
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-2.5 max-w-2xl mx-auto leading-relaxed">
                    Unlike static prompt-response chat models, Magentic AI executes a systematic loop: analyze, plan, execute, and verify.
                </p>
            </div>

            <!-- Autonomous Loop Console Card (Matches exact design specification) -->
            <div class="bg-[#050814] rounded-3xl border border-blue-950/80 p-6 sm:p-10 lg:p-12 shadow-2xl relative overflow-hidden">

                <!-- 1. USER PROMPT (Top Left) -->
                <div>
                    <span class="text-xs font-mono font-bold tracking-wider text-slate-500 uppercase block mb-3">
                        USER PROMPT
                    </span>
                    <div class="inline-block bg-[#0b132b]/80 border border-blue-900/40 rounded-xl px-5 py-3 sm:px-6 sm:py-3.5 shadow-sm">
                        <p class="font-mono text-white text-xs sm:text-sm font-semibold">
                            &ldquo;Fix the authentication bug on login.&rdquo;
                        </p>
                    </div>
                </div>

                <!-- 2. AGENT REASONING PIPELINE (Middle with Left Arrow & Vertical Line) -->
                <div class="mt-8 sm:mt-10 relative pl-8 sm:pl-10">

                    <!-- Left Vertical Down-Arrow & Track Line -->
                    <div class="absolute left-0 top-0 bottom-0 flex flex-col items-center">
                        <div class="w-6 h-6 rounded-full border border-blue-500/80 text-blue-400 flex items-center justify-center text-[10px] shrink-0 bg-[#050814]">
                            <i class="fa-solid fa-arrow-down"></i>
                        </div>
                        <div class="w-[1.5px] flex-1 bg-blue-600/50 mt-1 mb-2"></div>
                    </div>

                    <!-- Pipeline Header -->
                    <div class="text-xs font-mono font-bold tracking-wider text-blue-400 uppercase mb-3 flex items-center h-6">
                        AGENT REASONING PIPELINE
                    </div>

                    <!-- Pipeline Content Box -->
                    <div class="bg-[#0b132b]/50 border border-blue-900/40 rounded-2xl p-5 sm:p-7 space-y-3.5 sm:space-y-4">

                        <!-- Row 1: Analyze -->
                        <div class="flex flex-col sm:flex-row sm:items-center text-xs sm:text-sm gap-1 sm:gap-4">
                            <div class="w-28 sm:w-32 flex items-center gap-2 shrink-0 font-mono font-bold text-white">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-400 shrink-0"></span>
                                <span>Analyze</span>
                            </div>
                            <div class="font-mono text-slate-400">
                                Scanning AuthController.php...
                            </div>
                        </div>

                        <!-- Row 2: Plan -->
                        <div class="flex flex-col sm:flex-row sm:items-center text-xs sm:text-sm gap-1 sm:gap-4">
                            <div class="w-28 sm:w-32 flex items-center gap-2 shrink-0 font-mono font-bold text-white">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-400 shrink-0"></span>
                                <span>Plan</span>
                            </div>
                            <div class="font-mono text-slate-400">
                                Identified missing password hash verification step.
                            </div>
                        </div>

                        <!-- Row 3: Execute -->
                        <div class="flex flex-col sm:flex-row sm:items-center text-xs sm:text-sm gap-1 sm:gap-4">
                            <div class="w-28 sm:w-32 flex items-center gap-2 shrink-0 font-mono font-bold text-white">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-400 shrink-0"></span>
                                <span>Execute</span>
                            </div>
                            <div class="font-mono text-slate-400">
                                Applying patch to line 45.
                            </div>
                        </div>

                        <!-- Row 4: Verify -->
                        <div class="flex flex-col sm:flex-row sm:items-center text-xs sm:text-sm gap-1 sm:gap-4">
                            <div class="w-28 sm:w-32 flex items-center gap-2 shrink-0 font-mono font-bold text-white">
                                <span class="w-1.5 h-1.5 rounded-full bg-blue-400 shrink-0"></span>
                                <span>Verify</span>
                            </div>
                            <div class="font-mono text-slate-400">
                                Running AuthTest suite... 100% Passed.
                            </div>
                        </div>

                    </div>
                </div>

                <!-- 3. AI AGENT RESPONSE (Bottom Right) -->
                <div class="mt-8 sm:mt-10 ml-auto w-full md:max-w-xl lg:max-w-2xl">
                    <div class="text-right text-xs font-mono font-bold tracking-wider text-blue-400 uppercase mb-2">
                        AI AGENT RESPONSE
                    </div>
                    <div class="bg-[#0b132b]/80 border border-blue-900/50 rounded-2xl p-5 sm:p-6 shadow-sm">
                        <p class="font-mono text-xs sm:text-sm text-white leading-relaxed font-medium">
                            &ldquo;I found the issue in <span class="text-blue-400 font-semibold font-mono">AuthController.php</span> . I've applied the fix to securely verify password hashes and verified the affected test suites.&rdquo;
                        </p>
                    </div>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- IMPLEMENTATION: BUILT WITH MODERN STACK                                   -->
    <!-- ========================================================================= -->
    <section class="scroll-mt-24 py-16 lg:py-20 border-b bg-slate-50 border-slate-200/80 dark:bg-slate-900/50 dark:border-slate-800 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="text-center max-w-2xl mx-auto mb-14">
                <span class="inline-flex items-center gap-2 px-3.5 py-1.5 rounded-full text-xs font-bold uppercase tracking-wider bg-blue-50 dark:bg-blue-950/70 text-its-accent dark:text-blue-400 border border-blue-200/80 dark:border-blue-800 shadow-2xs mb-3">
                    <i class="fa-solid fa-cubes text-[11px]"></i> Implementation
                </span>
                <h2 class="text-3xl sm:text-4xl font-extrabold tracking-tight text-slate-900 dark:text-white">
                    Built With Modern Stack
                </h2>
                <p class="text-xs sm:text-sm text-slate-500 dark:text-slate-400 mt-2.5 max-w-2xl mx-auto leading-relaxed">
                    A combination of leading industry technologies for high performance, real-time synchronization, and AI agent autonomy.
                </p>
            </div>

            <!-- 5 Distinct Themed Cards in Grid -->
            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-5">

                <!-- Frontend -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-its-accent to-sky-500 group-hover:h-2 transition-all"></div>

                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-blue-50 dark:bg-blue-950/80 border border-blue-200/60 dark:border-blue-800/60 text-its-accent dark:text-blue-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition duration-300 shadow-2xs">
                            <i class="fa-solid fa-code"></i>
                        </div>
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-its-accent dark:text-blue-400 block mb-1">Frontend</span>
                        <h4 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">Monaco Web IDE</h4>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 font-mono leading-relaxed pt-3 border-t border-slate-100 dark:border-slate-800">
                        Monaco Editor, JavaScript, Tailwind CSS
                    </p>
                </div>

                <!-- Backend -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-rose-500 to-red-600 group-hover:h-2 transition-all"></div>

                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-rose-50 dark:bg-rose-950/80 border border-rose-200/60 dark:border-rose-800/60 text-rose-500 dark:text-rose-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition duration-300 shadow-2xs">
                            <i class="fa-brands fa-laravel"></i>
                        </div>
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-rose-600 dark:text-rose-400 block mb-1">Backend</span>
                        <h4 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">Laravel 11+</h4>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 font-mono leading-relaxed pt-3 border-t border-slate-100 dark:border-slate-800">
                        PHP 8.4, MySQL, Eloquent ORM
                    </p>
                </div>

                <!-- AI Core -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-indigo-500 to-purple-600 group-hover:h-2 transition-all"></div>

                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-indigo-50 dark:bg-indigo-950/80 border border-indigo-200/60 dark:border-indigo-800/60 text-indigo-600 dark:text-indigo-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition duration-300 shadow-2xs">
                            <i class="fa-solid fa-brain"></i>
                        </div>
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-indigo-600 dark:text-indigo-400 block mb-1">AI Core</span>
                        <h4 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">Agentic Loop</h4>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 font-mono leading-relaxed pt-3 border-t border-slate-100 dark:border-slate-800">
                        Custom Framework + LLM API
                    </p>
                </div>

                <!-- Integration -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-slate-700 to-slate-900 dark:from-slate-400 dark:to-slate-600 group-hover:h-2 transition-all"></div>

                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-slate-100 dark:bg-slate-800 border border-slate-200 dark:border-slate-700 text-slate-800 dark:text-white flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition duration-300 shadow-2xs">
                            <i class="fa-brands fa-github"></i>
                        </div>
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-slate-600 dark:text-slate-400 block mb-1">Integration</span>
                        <h4 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">GitHub API</h4>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 font-mono leading-relaxed pt-3 border-t border-slate-100 dark:border-slate-800">
                        REST &amp; GraphQL API, PR Sync
                    </p>
                </div>

                <!-- Realtime -->
                <div class="bg-white dark:bg-slate-900 border border-slate-200/90 dark:border-slate-800 rounded-2xl p-6 flex flex-col justify-between relative overflow-hidden group shadow-sm hover:shadow-xl transition-all duration-300 hover:-translate-y-1">
                    <!-- Top Accent Line -->
                    <div class="absolute top-0 left-0 right-0 h-1.5 bg-gradient-to-r from-emerald-500 to-teal-600 group-hover:h-2 transition-all"></div>

                    <div>
                        <div class="w-14 h-14 rounded-2xl bg-emerald-50 dark:bg-emerald-950/80 border border-emerald-200/60 dark:border-emerald-800/60 text-emerald-600 dark:text-emerald-400 flex items-center justify-center text-2xl mb-5 group-hover:scale-110 transition duration-300 shadow-2xs">
                            <i class="fa-solid fa-tower-broadcast"></i>
                        </div>
                        <span class="text-[10px] font-extrabold uppercase tracking-widest text-emerald-600 dark:text-emerald-400 block mb-1">Realtime</span>
                        <h4 class="text-base sm:text-lg font-bold text-slate-900 dark:text-white mb-2">WebSockets</h4>
                    </div>
                    <p class="text-xs text-slate-500 dark:text-slate-400 font-mono leading-relaxed pt-3 border-t border-slate-100 dark:border-slate-800">
                        Laravel Reverb, Presence Sync
                    </p>
                </div>

            </div>

        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- TIM PENGEMBANG KELOMPOK                                                   -->
    <!-- ========================================================================= -->
    <section class="scroll-mt-24 py-16 bg-slate-50 border-slate-200/80 dark:bg-slate-950 dark:border-slate-800 border-b transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-3xl mx-auto mb-12">
                <span class="text-xs font-bold tracking-wider uppercase text-its-accent px-3 py-1 rounded-full border border-blue-200 dark:border-blue-900 bg-blue-50 dark:bg-blue-950">
                    Engineering Team
                </span>
                <h3 class="text-2xl sm:text-3xl font-extrabold mt-2 text-slate-900 dark:text-white">
                    Magentic Core Student Developers
                </h3>
            </div>

            @php
                $team = [
                    ['name' => 'Aji Zaenul Musthofa', 'nrp' => '5025241065', 'role' => 'Software Engineering & AI Core', 'badge' => 'Profile Owner', 'initials' => 'AJ', 'github' => 'https://github.com/ajizaenulm'],
                    ['name' => 'Raden Kurniawan Agung Fitrianto', 'nrp' => '5025241104', 'role' => 'Full-Stack Developer & Architecture', 'badge' => 'Architecture Lead', 'initials' => 'RF', 'github' => 'https://github.com/theRadn'],
                    ['name' => 'Abdullah Sultan Barizy', 'nrp' => '5025241092', 'role' => 'The Project Manager', 'badge' => 'Project Lead', 'initials' => 'AB', 'github' => 'https://github.com/lamphyon'],
                    ['name' => 'Anak Agung Putu Arda Nareswara', 'nrp' => '5025241074', 'role' => 'Frontend & Multiplayer Sync', 'badge' => 'UI/UX Lead', 'initials' => 'AR', 'github' => 'https://github.com/gungardaa'],
                    ['name' => 'Willy Dava Nugraha', 'nrp' => '5025241090', 'role' => 'Junior Software Developer & Testing', 'badge' => 'QA / Testing', 'initials' => 'WN', 'github' => 'https://github.com/terainfinits'],
                    ['name' => 'Addien Zafriyan Al Akhsan', 'nrp' => '5025241058', 'role' => 'Dynamic Assistant & Integrator', 'badge' => 'DevOps', 'initials' => 'AZ', 'github' => 'https://github.com/RevEnterprise'],
                ];
            @endphp

            <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-5">
                @foreach($team as $m)
                    <div class="rounded-2xl border p-5 transition flex flex-col justify-between {{ $m['nrp'] == '5025241065' ? 'bg-blue-50/50 border-its-accent shadow-sm dark:bg-slate-900 dark:border-blue-500/80 dark:shadow-md dark:ring-1 dark:ring-blue-500/30' : 'bg-white border-slate-200/80 dark:bg-slate-900/60 dark:border-slate-800' }}">
                        <div>
                            <div class="flex items-center justify-between mb-3">
                                <div class="w-10 h-10 rounded-xl bg-slate-800 text-white font-black text-xs flex items-center justify-center">
                                    {{ $m['initials'] }}
                                </div>
                                <span class="text-[10px] font-bold px-2 py-0.5 rounded-full border {{ $m['nrp'] == '5025241065' ? 'bg-blue-100 text-its-accent border-blue-200 dark:bg-blue-950 dark:text-blue-300 dark:border-blue-800' : 'bg-slate-200 text-slate-700 border-slate-300 dark:bg-slate-800 dark:text-slate-300 dark:border-slate-700' }}">
                                    {{ $m['badge'] }}
                                </span>
                            </div>

                            <h4 class="text-sm font-bold text-slate-900 dark:text-white">{{ $m['name'] }}</h4>
                            <p class="text-xs font-mono text-its-accent dark:text-blue-400 font-semibold mt-0.5">NRP: {{ $m['nrp'] }}</p>
                            <p class="text-xs text-slate-500 dark:text-slate-400 mt-1">{{ $m['role'] }}</p>
                        </div>

                        <div class="pt-3 mt-3 border-t border-slate-200/60 dark:border-slate-800 flex items-center justify-between text-xs">
                            @if($m['nrp'] == '5025241065')
                                <a href="{{ route('profil.mahasiswa', $isDark ? ['mode' => 'dark'] : []) }}" class="text-its-accent dark:text-blue-400 hover:underline font-semibold flex items-center gap-1">
                                    <i class="fa-solid fa-id-card text-[10px]"></i> View Profile
                                </a>
                            @else
                                <span class="text-slate-400">Informatics ITS</span>
                            @endif

                            <a href="{{ $m['github'] }}" target="_blank" rel="noopener noreferrer" class="text-slate-400 hover:text-slate-600 dark:hover:text-white transition">
                                <i class="fa-brands fa-github text-sm"></i>
                            </a>
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </section>


    <!-- ========================================================================= -->
    <!-- FORMULIR PENGUMPULAN IDE DENGAN KOMPONEN STATUS BANNER                      -->
    <!-- ========================================================================= -->
    <section id="form-ide" class="scroll-mt-24 py-16 bg-white dark:bg-slate-950 transition-colors duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">

            <div class="max-w-3xl mx-auto rounded-3xl border p-6 sm:p-10 shadow-sm bg-white border-slate-200/90 dark:bg-slate-900 dark:border-slate-800">

                <div class="pb-6 mb-8 border-b border-slate-100 dark:border-slate-800">
                    <span class="text-[10px] font-bold uppercase tracking-wider text-slate-400">Project Proposal</span>
                    <h2 class="text-xl font-bold text-slate-900 dark:text-white flex items-center gap-2 mt-0.5">
                        <span class="w-8 h-8 rounded-lg bg-blue-50 dark:bg-blue-950 text-its-accent dark:text-blue-400 flex items-center justify-center text-sm">
                            <i class="fa-solid fa-pen-to-square"></i>
                        </span>
                        Idea Submission Form (FP Idea)
                        <span class="sr-only">Formulir Pengumpulan Ide</span>
                    </h2>
                </div>

                {{-- Reusable Component <x-status-banner> for Notification --}}
                @if(session('success'))
                    <div class="mb-6">
                        <x-status-banner type="success" title="Idea Successfully Submitted! (Pengajuan Ide Berhasil Dikirim!)">
                            {{ session('success') }}
                        </x-status-banner>
                    </div>
                @endif

                @if(isset($errors) && $errors->any())
                    <div class="mb-6">
                        <x-status-banner type="error" title="Form Submission Error">
                            <ul class="list-disc list-inside space-y-0.5">
                                @foreach($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </x-status-banner>
                    </div>
                @endif

                <!-- Submission Form (Name, NRP, FP Idea) -->
                <form action="{{ route('ide.agent.store', ['mode' => $isDark ? 'dark' : null]) }}" method="POST" class="space-y-6">
                    @csrf

                    <!-- Hidden fields to support backend processing & test compatibility -->
                    <input type="hidden" name="category" value="{{ old('category', 'Autonomous Agentic System') }}">
                    <input type="hidden" name="architecture" value="{{ old('architecture', 'ReAct Agent Loop') }}">
                    <input type="hidden" name="target_user" value="{{ old('target_user', 'Mahasiswa Informatika & Dosen') }}">
                    <input type="hidden" name="priority" value="{{ old('priority', 'Tinggi') }}">

                    <!-- Row 1: Name & NRP -->
                    <div class="grid grid-cols-1 sm:grid-cols-2 gap-5">
                        <!-- Name -->
                        <div>
                            <label for="author" class="block text-xs font-bold uppercase tracking-wider mb-2 text-slate-700 dark:text-slate-300">
                                Name <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 text-xs">
                                    <i class="fa-solid fa-user"></i>
                                </span>
                                <input type="text" id="author" name="author"
                                    value="{{ old('author', 'Aji Zaenul Musthofa') }}"
                                    placeholder="e.g. Aji Zaenul Musthofa"
                                    class="w-full pl-9 pr-3.5 py-3 rounded-xl text-sm transition bg-slate-50 border-slate-200 text-slate-800 focus:bg-white focus:border-its-accent dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:focus:border-blue-400 dark:focus:bg-slate-800 border shadow-2xs"
                                    required>
                            </div>
                        </div>

                        <!-- NRP -->
                        <div>
                            <label for="nrp" class="block text-xs font-bold uppercase tracking-wider mb-2 text-slate-700 dark:text-slate-300">
                                NRP <span class="text-rose-500">*</span>
                            </label>
                            <div class="relative">
                                <span class="absolute inset-y-0 left-0 pl-3.5 flex items-center pointer-events-none text-slate-400 text-xs">
                                    <i class="fa-solid fa-id-badge"></i>
                                </span>
                                <input type="text" id="nrp" name="nrp"
                                    value="{{ old('nrp', '5025241065') }}"
                                    placeholder="10-digit NRP (e.g. 5025241065)"
                                    class="w-full pl-9 pr-3.5 py-3 rounded-xl text-sm font-mono transition bg-slate-50 border-slate-200 text-slate-800 focus:bg-white focus:border-its-accent dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:focus:border-blue-400 dark:focus:bg-slate-800 border shadow-2xs"
                                    required maxlength="10">
                            </div>
                        </div>
                    </div>

                    <!-- Row 2: FP Idea -->
                    <div>
                        <label for="title" class="block text-xs font-bold uppercase tracking-wider mb-2 text-slate-700 dark:text-slate-300">
                            FP Idea <span class="text-rose-500">*</span>
                        </label>
                        <div class="relative">
                            <textarea id="title" name="title" rows="4"
                                placeholder="Describe your Final Project (FP) innovation idea here..."
                                class="w-full p-4 rounded-xl text-sm leading-relaxed transition bg-slate-50 border-slate-200 text-slate-800 focus:bg-white focus:border-its-accent dark:bg-slate-800 dark:border-slate-700 dark:text-white dark:focus:border-blue-400 border shadow-2xs"
                                required>{{ old('title') }}</textarea>
                        </div>
                    </div>

                    <!-- Submit Button -->
                    <div class="pt-4 border-t border-slate-100 dark:border-slate-800 flex justify-end">
                        <button type="submit"
                            class="w-full sm:w-auto px-8 py-3.5 rounded-xl bg-its-accent hover:bg-its-blue text-white font-bold text-xs shadow-md shadow-blue-500/20 transition flex items-center justify-center gap-2">
                            <i class="fa-solid fa-paper-plane"></i>
                            Submit FP Idea
                        </button>
                    </div>
                </form>
            </div>

            <!-- Anchor untuk redirect session -->
            <div id="daftar-ide"></div>
        </div>
    </section>

    <!-- Canvas Architecture Script -->
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const cv = document.getElementById('workspaceCanvas');
            if (!cv) return;

            const ctx = cv.getContext('2d');
            let animId;

            const nodeDefinitions = [
                {
                    id: 'center',
                    text: 'Web Monaco IDE',
                    w: 184,
                    h: 44,
                    textColor: '#ffffff',
                    border: '#0070f3',
                    bg: '#003882',
                    glow: 'rgba(0, 112, 243, 0.85)',
                    glowBlur: 16
                },
                {
                    id: 'github',
                    text: 'GitHub API',
                    w: 160,
                    h: 42,
                    textColor: '#f1f5f9',
                    border: '#3b465c',
                    bg: '#1e2638'
                },
                {
                    id: 'collaborator',
                    text: 'Collaborators',
                    w: 160,
                    h: 42,
                    textColor: '#34d399',
                    border: '#059669',
                    bg: '#064e3b'
                },
                {
                    id: 'ai',
                    text: 'Agentic AI',
                    w: 160,
                    h: 42,
                    textColor: '#8bb4f8',
                    border: '#3b5998',
                    bg: '#1e2f65'
                },
                {
                    id: 'backend',
                    text: 'Laravel Backend',
                    w: 164,
                    h: 42,
                    textColor: '#f87171',
                    border: '#852222',
                    bg: '#581414'
                }
            ];

            function drawDoubleArrow(x1, y1, x2, y2, color, progress) {
                // Main connecting line
                ctx.beginPath();
                ctx.moveTo(x1, y1);
                ctx.lineTo(x2, y2);
                ctx.strokeStyle = color;
                ctx.lineWidth = 1.6;
                ctx.stroke();

                // Helper to draw an arrowhead at (tx, ty) pointing away from (fromX, fromY)
                const drawHead = (tx, ty, fromX, fromY) => {
                    const angle = Math.atan2(ty - fromY, tx - fromX);
                    const arrowLength = 7.5;
                    const arrowWidth = 4.2;

                    ctx.save();
                    ctx.translate(tx, ty);
                    ctx.rotate(angle);
                    ctx.beginPath();
                    ctx.moveTo(0, 0);
                    ctx.lineTo(-arrowLength, -arrowWidth);
                    ctx.lineTo(-arrowLength + 2, 0);
                    ctx.lineTo(-arrowLength, arrowWidth);
                    ctx.closePath();
                    ctx.fillStyle = color;
                    ctx.fill();
                    ctx.restore();
                };

                // Arrow pointing to target node at (x2, y2)
                drawHead(x2, y2, x1, y1);
                // Arrow pointing to source node at (x1, y1)
                drawHead(x1, y1, x2, y2);

                // Subtle animated sync pulse along the line
                if (progress !== undefined) {
                    const px = x1 + (x2 - x1) * progress;
                    const py = y1 + (y2 - y1) * progress;

                    ctx.save();
                    ctx.beginPath();
                    ctx.arc(px, py, 2.5, 0, Math.PI * 2);
                    ctx.fillStyle = '#ffffff';
                    ctx.shadowColor = '#60a5fa';
                    ctx.shadowBlur = 6;
                    ctx.fill();
                    ctx.restore();
                }
            }

            function render() {
                const rect = cv.getBoundingClientRect();
                const dpr = window.devicePixelRatio || 1;
                const width = rect.width;
                const height = rect.height;

                if (cv.width !== Math.round(width * dpr) || cv.height !== Math.round(height * dpr)) {
                    cv.width = Math.round(width * dpr);
                    cv.height = Math.round(height * dpr);
                }

                ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
                ctx.clearRect(0, 0, width, height);

                // Responsive Scale: adapt gracefully on smaller viewports
                const baseWidth = 720;
                const scale = Math.min(1, Math.max(0.5, (width - 20) / baseWidth));

                ctx.save();
                ctx.translate(width / 2, height / 2);
                ctx.scale(scale, scale);

                const nodes = {};
                nodeDefinitions.forEach(def => {
                    nodes[def.id] = { ...def };
                });

                // Layout coordinates relative to center (0, 0)
                const centerNode = nodes.center;
                centerNode.x = 0;
                centerNode.y = 0;

                const gapX = 64;
                const gapY = 56;

                const leftNode = nodes.collaborator;
                leftNode.x = -(centerNode.w / 2 + gapX + leftNode.w / 2);
                leftNode.y = 0;

                const rightNode = nodes.ai;
                rightNode.x = centerNode.w / 2 + gapX + rightNode.w / 2;
                rightNode.y = 0;

                const topNode = nodes.github;
                topNode.x = 0;
                topNode.y = -(centerNode.h / 2 + gapY + topNode.h / 2);

                const bottomNode = nodes.backend;
                bottomNode.x = 0;
                bottomNode.y = centerNode.h / 2 + gapY + bottomNode.h / 2;

                // Sync pulses (3s cycle)
                const t = (performance.now() / 3000) % 1;
                const t2 = (t + 0.5) % 1;
                const lineColor = '#526075';

                // 1. Collaborators <---> Web Monaco IDE
                drawDoubleArrow(
                    leftNode.x + leftNode.w / 2, leftNode.y,
                    centerNode.x - centerNode.w / 2, centerNode.y,
                    lineColor,
                    t
                );

                // 2. Web Monaco IDE <---> Agentic AI
                drawDoubleArrow(
                    centerNode.x + centerNode.w / 2, centerNode.y,
                    rightNode.x - rightNode.w / 2, rightNode.y,
                    lineColor,
                    t2
                );

                // 3. GitHub API <---> Web Monaco IDE
                drawDoubleArrow(
                    topNode.x, topNode.y + topNode.h / 2,
                    centerNode.x, centerNode.y - centerNode.h / 2,
                    lineColor,
                    t
                );

                // 4. Web Monaco IDE <---> Laravel Backend
                drawDoubleArrow(
                    centerNode.x, centerNode.y + centerNode.h / 2,
                    bottomNode.x, bottomNode.y - bottomNode.h / 2,
                    lineColor,
                    t2
                );

                // Draw each node box
                [leftNode, rightNode, topNode, bottomNode, centerNode].forEach(node => {
                    const nx = node.x - node.w / 2;
                    const ny = node.y - node.h / 2;

                    // Outer Glow for Monaco Web IDE
                    if (node.glow) {
                        ctx.shadowColor = node.glow;
                        ctx.shadowBlur = node.glowBlur || 14;
                    } else {
                        ctx.shadowBlur = 0;
                    }

                    // Background & Border
                    ctx.fillStyle = node.bg;
                    ctx.strokeStyle = node.border;
                    ctx.lineWidth = node.id === 'center' ? 2 : 1.5;

                    ctx.beginPath();
                    ctx.roundRect(nx, ny, node.w, node.h, 11);
                    ctx.fill();
                    ctx.stroke();

                    ctx.shadowBlur = 0; // Turn off glow for text

                    // Centered Text Label
                    ctx.font = '600 13px Inter, system-ui, -apple-system, BlinkMacSystemFont, "Segoe UI", Roboto, sans-serif';
                    ctx.textAlign = 'center';
                    ctx.textBaseline = 'middle';
                    ctx.fillStyle = node.textColor;
                    ctx.fillText(node.text, node.x, node.y);
                });

                ctx.restore();

                animId = requestAnimationFrame(render);
            }

            if (document.fonts && document.fonts.ready) {
                document.fonts.ready.then(() => {
                    animId = requestAnimationFrame(render);
                });
            } else {
                animId = requestAnimationFrame(render);
            }

            window.addEventListener('resize', () => {
                cancelAnimationFrame(animId);
                animId = requestAnimationFrame(render);
            });
        });
    </script>
</x-layouts.app>
