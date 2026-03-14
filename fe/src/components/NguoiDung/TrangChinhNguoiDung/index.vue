<template>
    <div class="d-flex vh-100 w-100 overflow-hidden"
        style="background-color: #f8fafc; font-family: 'Inter', sans-serif;">
        <!-- Left Sidebar -->
        <aside class="bg-white border-end d-flex flex-column flex-shrink-0" style="width: 260px;">
            <!-- Logo -->
            <div class="px-4 py-4 d-flex align-items-center mb-2">
                <div class="d-flex justify-content-center align-items-center rounded-3 me-3 shadow-sm"
                    style="background-color: #ea580c; width: 44px; height: 44px;">
                    <i class="bx bx-camera-movie text-white fs-4"></i>
                </div>
                <div>
                    <h5 class="mb-0 fw-bolder" style="color: #0f172a; font-size: 1.15rem; letter-spacing: -0.5px;">
                        AI-Meet</h5>
                    <small class="text-muted fw-medium" style="font-size: 0.75rem;">Video Intelligence</small>
                </div>
            </div>

            <!-- Navigation -->
            <div class="px-3 flex-grow-1 mt-2">
                <ul class="nav nav-pills flex-column mb-auto gap-2">
                    <li class="nav-item">
                        <a href="#" @click.prevent="currentTab = 'dashboard'"
                            :class="['nav-link d-flex align-items-center fw-medium py-2 px-3 rounded-3', currentTab === 'dashboard' ? 'active-tab fw-bold' : 'text-dark text-muted-hover']">
                            <i class='bx bxs-dashboard me-3 fs-5'
                                :style="currentTab === 'dashboard' ? '' : 'color: #64748b;'"></i> Dashboard
                        </a>
                    </li>
                    <li class="nav-item">
                        <a href="#" @click.prevent="currentTab = 'meetings'"
                            :class="['nav-link d-flex align-items-center fw-medium py-2 px-3 rounded-3', currentTab === 'meetings' ? 'active-tab fw-bold' : 'text-dark text-muted-hover']">
                            <i class='bx bx-camera-movie me-3 fs-5'
                                :style="currentTab === 'meetings' ? '' : 'color: #64748b;'"></i> Meetings
                        </a>
                    </li>

                    <li class="nav-item">
                        <a href="#" @click.prevent="currentTab = 'settings'"
                            :class="['nav-link d-flex align-items-center fw-medium py-2 px-3 rounded-3', currentTab === 'settings' ? 'active-tab fw-bold' : 'text-dark text-muted-hover']">
                            <i class='bx bx-cog me-3 fs-5'
                                :style="currentTab === 'settings' ? '' : 'color: #64748b;'"></i> Settings
                        </a>
                    </li>
                </ul>
            </div>

            <!-- Pro Plan -->
            <div class="p-4 mt-auto">
                <div class="p-3 rounded-4 pt-4 text-center"
                    style="background-color: #fff7ed; border: 1px solid #ffedd5;">
                    <div class="text-start mb-2">
                        <h6 class="fw-bolder mb-1" style="color: #ea580c; font-size: 0.75rem; letter-spacing: 0.5px;">
                            PRO PLAN</h6>
                        <p class="small text-muted mb-3 lh-sm" style="font-size: 0.8rem; color: #64748b !important;">
                            Unlimited AI-Face tracking & storage.</p>
                    </div>
                    <button class="btn w-100 fw-bold text-white shadow-sm"
                        style="background-color: #ea580c; font-size: 0.85rem; padding: 10px 0; border-radius: 8px;">Upgrade
                        Plan</button>
                </div>
            </div>
        </aside>

        <!-- Main Content -->
        <main class="flex-grow-1 d-flex flex-column overflow-hidden h-100">
            <!-- Topbar -->
            <header
                class="bg-white border-bottom d-flex align-items-center justify-content-between px-4 p-xl-4 flex-shrink-0"
                style="height: 80px;">
                <!-- Search -->
                <div class="position-relative" style="width: 380px;">
                    <i class='bx bx-search position-absolute top-50 translate-middle-y text-muted fs-5'
                        style="left: 16px; color: #94a3b8 !important;"></i>
                    <input type="text" class="form-control bg-light border-0 shadow-none ps-5"
                        placeholder="Search meetings, recordings, or people..."
                        style="border-radius: 12px; font-size: 0.95rem; padding-top: 12px; padding-bottom: 12px; color: #64748b;">
                </div>

                <!-- Right Actions -->
                <div class="d-flex align-items-center gap-3">
                    <button
                        class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center bg-white border position-relative shadow-sm"
                        style="width: 44px; height: 44px; border-color: #e2e8f0 !important;">
                        <i class='bx bxs-bell fs-5' style="color: #334155;"></i>
                    </button>
                    <button
                        class="btn btn-light rounded-circle p-2 d-flex align-items-center justify-content-center bg-white border shadow-sm"
                        style="width: 44px; height: 44px; border-color: #e2e8f0 !important;">
                        <i class='bx bxs-message-square-dots fs-5' style="color: #334155;"></i>
                    </button>
                    <div class="border-start ms-2 ps-4 d-flex align-items-center"
                        style="border-color: #e2e8f0 !important;">
                        <div class="text-end me-3 d-none d-md-block">
                            <h6 class="mb-0 fw-bolder" style="font-size: 0.95rem; color: #0f172a;">Alex Thompson</h6>
                            <small class="fw-bold" style="font-size: 0.75rem; color: #ea580c;">Verified Identity</small>
                        </div>
                        <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=150&q=80"
                            alt="Profile" class="rounded-circle border border-2 shadow-sm" width="46" height="46"
                            style="border-color: #fff !important; outline: 2px solid #ea580c;">
                    </div>
                </div>
            </header>

            <!-- Scrollable Content Area -->
            <div class="flex-grow-1 overflow-auto p-4 p-xl-5">
                <div style="max-width: 1100px; margin: 0 auto;">

                    <!-- TAB: DASHBOARD -->
                    <div v-if="currentTab === 'dashboard'">
                        <!-- User Welcome Row -->
                        <div class="row mb-4">
                            <div class="col-md-6 d-flex flex-column justify-content-end">
                                <h2 class="fw-bolder mb-2"
                                    style="color: #0f172a; letter-spacing: -0.5px; font-size: 2rem;">Welcome back, Alex!
                                </h2>
                                <p class="mb-0" style="font-size: 1rem; color: #64748b;">You have <strong>3
                                        meetings</strong> scheduled for today.</p>
                            </div>
                            <div class="col-md-6 d-none d-md-flex flex-column justify-content-end align-items-end mb-1">
                                <p class="text-muted fw-bold mb-1" style="font-size: 0.75rem; letter-spacing: 1px;">
                                    LOCAL TIME</p>
                                <h3 class="fw-bolder mb-0"
                                    style="color: #0f172a; font-size: 1.5rem; letter-spacing: -0.5px;">10:45 AM</h3>
                            </div>
                        </div>

                        <!-- Action Cards Row -->
                        <div class="row g-4 mb-5">
                            <!-- New Meeting -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 p-4 text-white shadow-sm d-flex flex-column"
                                    style="background-color: #ea580c; border-radius: 16px;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center rounded mb-4 shadow-sm"
                                            style="background-color: rgba(255,255,255,0.25); width: 44px; height: 44px;">
                                            <i class="bx bx-video-plus fs-4"></i>
                                        </div>
                                        <h4 class="fw-bolder mb-2" style="font-size: 1.35rem;">New Meeting</h4>
                                        <p class="mb-4 text-white"
                                            style="font-size: 0.95rem; opacity: 0.9; line-height: 1.5;">Start an instant
                                            meeting with AI face tracking active.</p>
                                    </div>
                                    <div class="mt-auto">
                                        <button class="btn bg-white fw-bolder w-100 py-2"
                                            style="border-radius: 8px; color: #ea580c; font-size: 1rem;">Start
                                            Now</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Join Meeting -->
                            <div class="col-lg-4 col-md-6">
                                <div class="card border-0 h-100 p-4 shadow-sm d-flex flex-column"
                                    style="background-color: #ffffff; border-radius: 16px; border: 1px solid #f1f5f9 !important;">
                                    <div>
                                        <div class="d-flex justify-content-center align-items-center rounded-3 mb-4 shadow-sm"
                                            style="background-color: #fff7ed; width: 44px; height: 44px;">
                                            <i class="bx bxs-keyboard fs-4" style="color: #ea580c;"></i>
                                        </div>
                                        <h4 class="fw-bolder mb-2 text-dark" style="font-size: 1.35rem;">Join Meeting
                                        </h4>
                                        <p class="mb-4" style="font-size: 0.95rem; color: #64748b; line-height: 1.5;">
                                            Enter the meeting ID or link to connect.</p>
                                    </div>
                                    <div class="d-flex mt-auto gap-3">
                                        <div class="flex-grow-1 position-relative">
                                            <input type="text"
                                                class="form-control bg-light border-0 shadow-none h-100 ps-3 fw-medium"
                                                placeholder="ID: 000-000-000"
                                                style="font-size: 0.9rem; border-radius: 8px; color: #475569;">
                                        </div>
                                        <button class="btn text-white fw-bold px-4"
                                            style="background-color: #ea580c; border-radius: 8px;">Join</button>
                                    </div>
                                </div>
                            </div>

                            <!-- Face ID Status -->
                            <div class="col-lg-4 col-md-12">
                                <div class="card border-0 h-100 p-4 text-white shadow-sm position-relative overflow-hidden d-flex flex-column"
                                    style="background-color: #0f172a; border-radius: 16px;">
                                    <div class="d-flex justify-content-between align-items-start mb-4">
                                        <div>
                                            <h4 class="fw-bolder mb-2" style="font-size: 1.3rem;">Face ID Status</h4>
                                            <div class="d-flex align-items-center" style="color: #ea580c;">
                                                <i class='bx bxs-check-shield me-2 fs-5'></i>
                                                <span class="fw-semibold small">Fully Synchronized</span>
                                            </div>
                                        </div>
                                        <div class="rounded-3 overflow-hidden"
                                            style="width: 55px; height: 55px; background-color: #334155; border: 2px solid #334155;">
                                            <img src="https://images.unsplash.com/photo-1599566150163-29194dcaad36?auto=format&fit=crop&w=150&q=80"
                                                class="w-100 h-100 object-fit-cover" alt="Face Scanned"
                                                style="filter: contrast(1.1) brightness(0.9);">
                                        </div>
                                    </div>

                                    <div class="mt-auto pt-2">
                                        <div class="progress mb-3 shadow-none"
                                            style="height: 6px; background-color: #334155; border-radius: 10px;">
                                            <div class="progress-bar rounded-pill" role="progressbar"
                                                style="width: 94.2%; background-color: #ea580c;"></div>
                                        </div>
                                        <div class="d-flex justify-content-between align-items-end">
                                            <div>
                                                <p class="small mb-0 fw-medium"
                                                    style="color: #94a3b8; font-size: 0.75rem;">Confidence Score:</p>
                                                <h5 class="fw-bolder mb-0 mt-1">94.2%</h5>
                                            </div>
                                            <a href="#" class="small text-decoration-none fw-semibold"
                                                style="color: #ea580c; line-height: 1.3; text-align: right;">Manage<br>Biometrics</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <!-- Lists Row -->
                        <div class="row g-4">
                            <!-- Upcoming Meetings -->
                            <div class="col-lg-7">
                                <div class="d-flex justify-content-between align-items-center mb-4">
                                    <h4 class="fw-bolder mb-0 text-dark" style="font-size: 1.25rem;">Upcoming Meetings
                                    </h4>
                                    <a href="#" class="fw-bolder text-decoration-none small"
                                        style="color: #ea580c;">View Calendar</a>
                                </div>

                                <div class="d-flex flex-column gap-3">
                                    <!-- Meeting Item 1 -->
                                    <div class="card border-0 shadow-sm p-3" style="border-radius: 12px;">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-3 d-flex flex-column justify-content-center align-items-center px-3 py-2 me-4"
                                                style="background-color: #f8fafc; min-width: 65px; border: 1px solid #f1f5f9;">
                                                <span class="fw-bolder"
                                                    style="color: #ea580c; font-size: 1.15rem;">24</span>
                                                <span class="small fw-bolder text-muted"
                                                    style="font-size: 0.65rem;">OCT</span>
                                            </div>
                                            <div class="flex-grow-1 pe-3">
                                                <h6 class="fw-bolder mb-1 text-dark" style="font-size: 0.95rem;">Product
                                                    Sync: Design Review</h6>
                                                <div class="d-flex align-items-center fw-medium mt-1"
                                                    style="color: #94a3b8; font-size: 0.8rem;">
                                                    <span>11:00 AM - 12:00 PM</span>
                                                    <span class="mx-2">•</span>
                                                    <span>ID: 882-192-331</span>
                                                </div>
                                            </div>
                                            <div class="d-none d-sm-flex align-items-center me-4">
                                                <div class="avatar-group d-flex">
                                                    <img src="https://images.unsplash.com/photo-1534528741775-53994a69daeb?auto=format&fit=crop&w=100&q=80"
                                                        class="rounded-circle border border-2 border-white ms-n2 shadow-sm"
                                                        width="32" height="32" style="margin-left: -12px; z-index: 3;">
                                                    <img src="https://images.unsplash.com/photo-1506794778202-cad84cf45f1d?auto=format&fit=crop&w=100&q=80"
                                                        class="rounded-circle border border-2 border-white ms-n2 shadow-sm"
                                                        width="32" height="32" style="margin-left: -12px; z-index: 2;">
                                                    <img src="https://images.unsplash.com/photo-1494790108377-be9c29b29330?auto=format&fit=crop&w=100&q=80"
                                                        class="rounded-circle border border-2 border-white ms-n2 shadow-sm"
                                                        width="32" height="32" style="margin-left: -12px; z-index: 1;">
                                                    <div class="rounded-circle border border-2 border-white ms-n2 d-flex justify-content-center align-items-center bg-light text-muted fw-bold shadow-sm"
                                                        style="width: 32px; height: 32px; margin-left: -12px; z-index: 0; font-size: 0.7rem;">
                                                        +5</div>
                                                </div>
                                            </div>
                                            <button class="btn text-white fw-bold px-4 py-2"
                                                style="background-color: #ea580c; border-radius: 8px; font-size: 0.9rem;">Join</button>
                                        </div>
                                    </div>

                                    <!-- Meeting Item 2 -->
                                    <div class="card border-0 shadow-sm p-3 bg-white"
                                        style="border-radius: 12px; border: 1px solid #f1f5f9 !important;">
                                        <div class="d-flex align-items-center">
                                            <div class="rounded-3 d-flex flex-column justify-content-center align-items-center px-3 py-2 me-4"
                                                style="background-color: #f8fafc; min-width: 65px; opacity: 0.7;">
                                                <span class="fw-bolder"
                                                    style="color: #94a3b8; font-size: 1.15rem;">25</span>
                                                <span class="small fw-bolder text-muted"
                                                    style="font-size: 0.65rem;">OCT</span>
                                            </div>
                                            <div class="flex-grow-1">
                                                <h6 class="fw-bolder mb-1 text-dark" style="font-size: 0.95rem;">
                                                    Investor Monthly Update</h6>
                                                <div class="d-flex align-items-center fw-medium mt-1"
                                                    style="color: #94a3b8; font-size: 0.8rem;">
                                                    <span>09:30 AM - 10:30 AM</span>
                                                    <span class="mx-2">•</span>
                                                    <span>ID: 110-349-882</span>
                                                </div>
                                            </div>
                                            <button class="btn fw-semibold px-4 py-2 bg-white"
                                                style="border-radius: 8px; border: 1px solid #e2e8f0; color: #64748b; font-size: 0.9rem;">Details</button>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <!-- Meeting History -->
                            <div class="col-lg-5">
                                <h4 class="fw-bolder mb-4 text-dark" style="font-size: 1.25rem;">Meeting History</h4>

                                <div class="card border-0 shadow-sm p-0" style="border-radius: 12px;">
                                    <div class="list-group list-group-flush" style="border-radius: 12px;">

                                        <!-- History Item 1 -->
                                        <div class="list-group-item p-4 border-bottom-0 pb-3 bg-transparent">
                                            <div class="d-flex align-items-start">
                                                <div class="mt-1 me-3">
                                                    <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                        style="width: 24px; height: 24px; color: #22c55e;">
                                                        <i class='bx bx-check fs-6'></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">QA
                                                        Testing Call</h6>
                                                    <p class="fw-medium mb-2"
                                                        style="color: #94a3b8; font-size: 0.75rem;">Yesterday, 4:15 PM •
                                                        45 mins</p>
                                                    <div class="d-flex gap-2">
                                                        <span class="badge fw-bold"
                                                            style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">TRANSCRIPT</span>
                                                        <span class="badge fw-bold"
                                                            style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">RECORDING</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="m-0 mx-4" style="border-color: #e2e8f0; border-top-style: dashed;">

                                        <!-- History Item 2 -->
                                        <div class="list-group-item p-4 border-bottom-0 py-3 bg-transparent">
                                            <div class="d-flex align-items-start">
                                                <div class="mt-1 me-3">
                                                    <div class="rounded-circle d-flex justify-content-center align-items-center bg-secondary bg-opacity-10"
                                                        style="width: 24px; height: 24px; color: #64748b;">
                                                        <i class='bx bx-video-off fs-6'></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                        Missed: Marketing Brainstorm</h6>
                                                    <p class="fw-medium mb-0"
                                                        style="color: #94a3b8; font-size: 0.75rem;">Oct 22, 2:00 PM</p>
                                                </div>
                                            </div>
                                        </div>

                                        <hr class="m-0 mx-4" style="border-color: #e2e8f0; border-top-style: dashed;">

                                        <!-- History Item 3 -->
                                        <div class="list-group-item p-4 border-bottom-0 pt-3 bg-transparent">
                                            <div class="d-flex align-items-start">
                                                <div class="mt-1 me-3">
                                                    <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                        style="width: 24px; height: 24px; color: #22c55e;">
                                                        <i class='bx bx-check fs-6'></i>
                                                    </div>
                                                </div>
                                                <div class="flex-grow-1">
                                                    <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                        One-on-one with Sarah</h6>
                                                    <p class="fw-medium mb-0"
                                                        style="color: #94a3b8; font-size: 0.75rem;">Oct 22, 11:30 AM •
                                                        30 mins</p>
                                                </div>
                                            </div>
                                        </div>

                                        <div class="list-group-item text-center p-3 mt-2 border-top-0 rounded-bottom"
                                            style="background-color: #f8fafc; border-radius: 0 0 12px 12px;">
                                            <a href="#" class="fw-bold text-decoration-none small"
                                                style="color: #64748b;">View Full History</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: MEETINGS -->
                    <div v-if="currentTab === 'meetings'">
                        <h2 class="fw-bolder mb-5" style="color: #0f172a; letter-spacing: -0.5px; font-size: 2rem;">
                            Meetings</h2>

                        <div class="row g-4">
                            <!-- Left Col: Create Room -->
                            <div class="col-lg-7">
                                <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                                    <div class="d-flex align-items-center mb-5">
                                        <div class="d-flex justify-content-center align-items-center rounded me-3 shadow-sm"
                                            style="background-color: #fff7ed; width: 44px; height: 44px;">
                                            <i class="bx bx-calendar-check fs-4" style="color: #ea580c;"></i>
                                        </div>
                                        <h4 class="fw-bolder mb-0 text-dark" style="font-size: 1.35rem;">Create Meeting
                                            Room</h4>
                                    </div>

                                    <form>
                                        <!-- Meeting Title -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold mb-2 text-muted"
                                                style="font-size: 0.75rem; letter-spacing: 1px;">MEETING TITLE</label>
                                            <input type="text"
                                                class="form-control form-control-lg bg-light border-0 shadow-none px-3 py-3"
                                                placeholder="e.g., Weekly Team Sync"
                                                style="border-radius: 12px; font-size: 0.95rem; color: #475569;">
                                        </div>

                                        <!-- Description -->
                                        <div class="mb-4">
                                            <label class="form-label fw-bold mb-2 text-muted"
                                                style="font-size: 0.75rem; letter-spacing: 1px;">DESCRIPTION</label>
                                            <textarea
                                                class="form-control form-control-lg bg-light border-0 shadow-none px-3 py-3"
                                                rows="4" placeholder="Outline the meeting agenda or objectives..."
                                                style="border-radius: 12px; font-size: 0.95rem; color: #475569; resize: none;"></textarea>
                                        </div>

                                        <!-- Participants -->
                                        <div class="mb-5">
                                            <label class="form-label fw-bold mb-2 text-muted"
                                                style="font-size: 0.75rem; letter-spacing: 1px;">INVITE
                                                PARTICIPANTS</label>
                                            <div class="position-relative">
                                                <i class='bx bx-at position-absolute top-50 translate-middle-y fs-5'
                                                    style="left: 1rem; color: #94a3b8;"></i>
                                                <input type="text"
                                                    class="form-control form-control-lg bg-light border-0 shadow-none ps-5 py-3"
                                                    placeholder="Add email addresses separated by commas"
                                                    style="border-radius: 12px; font-size: 0.95rem; color: #475569;">
                                            </div>
                                        </div>

                                        <!-- Create Button -->
                                        <button type="button" class="btn text-white fw-bold px-4 py-3"
                                            style="background-color: #ea580c; border-radius: 8px; font-size: 1rem; min-width: 180px;">
                                            Create Meeting
                                        </button>
                                    </form>
                                </div>
                            </div>

                            <!-- Right Col: Join & History -->
                            <div class="col-lg-5">
                                <!-- Join Meeting Mini Card -->
                                <div class="card border-0 shadow-sm p-4 text-center mb-5" style="border-radius: 16px;">
                                    <div class="d-flex align-items-center mb-4">
                                        <div class="d-flex justify-content-center align-items-center rounded me-3 shadow-sm"
                                            style="background-color: #fff7ed; width: 44px; height: 44px;">
                                            <i class="bx bxs-keyboard fs-4" style="color: #ea580c;"></i>
                                        </div>
                                        <h5 class="fw-bolder mb-0 text-dark">Join Meeting</h5>
                                    </div>
                                    <div class="d-flex gap-3">
                                        <div class="flex-grow-1">
                                            <input type="text"
                                                class="form-control bg-light border-0 shadow-none h-100 ps-3 fw-medium"
                                                placeholder="ID: 000-000-000"
                                                style="font-size: 0.95rem; border-radius: 8px; color: #475569;">
                                        </div>
                                        <button class="btn text-white fw-bold px-4"
                                            style="background-color: #ea580c; border-radius: 8px;">Join</button>
                                    </div>
                                </div>

                                <!-- Meeting History -->
                                <div>
                                    <h4 class="fw-bolder mb-4 text-dark" style="font-size: 1.25rem;">Meeting History
                                    </h4>

                                    <div class="card border-0 shadow-sm p-0" style="border-radius: 12px;">
                                        <div class="list-group list-group-flush" style="border-radius: 12px;">

                                            <!-- History Item 1 -->
                                            <div class="list-group-item p-4 border-bottom-0 pb-3 bg-transparent">
                                                <div class="d-flex align-items-start">
                                                    <div class="mt-1 me-3">
                                                        <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                            style="width: 24px; height: 24px; color: #22c55e;">
                                                            <i class='bx bx-check fs-6'></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                            QA Testing Call</h6>
                                                        <p class="fw-medium mb-2"
                                                            style="color: #94a3b8; font-size: 0.75rem;">Yesterday, 4:15
                                                            PM • 45 mins</p>
                                                        <div class="d-flex gap-2">
                                                            <span class="badge fw-bold"
                                                                style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">TRANSCRIPT</span>
                                                            <span class="badge fw-bold"
                                                                style="background-color: #fff7ed; color: #ea580c; font-size: 0.6rem; padding: 4px 8px; letter-spacing: 0.5px;">RECORDING</span>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="m-0 mx-4"
                                                style="border-color: #e2e8f0; border-top-style: dashed;">

                                            <!-- History Item 2 -->
                                            <div class="list-group-item p-4 border-bottom-0 py-3 bg-transparent">
                                                <div class="d-flex align-items-start">
                                                    <div class="mt-1 me-3">
                                                        <div class="rounded-circle d-flex justify-content-center align-items-center bg-secondary bg-opacity-10"
                                                            style="width: 24px; height: 24px; color: #64748b;">
                                                            <i class='bx bx-video-off fs-6'></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                            Missed: Marketing Brainstorm</h6>
                                                        <p class="fw-medium mb-0"
                                                            style="color: #94a3b8; font-size: 0.75rem;">Oct 22, 2:00 PM
                                                        </p>
                                                    </div>
                                                </div>
                                            </div>

                                            <hr class="m-0 mx-4"
                                                style="border-color: #e2e8f0; border-top-style: dashed;">

                                            <!-- History Item 3 -->
                                            <div class="list-group-item p-4 border-bottom-0 pt-3 bg-transparent">
                                                <div class="d-flex align-items-start">
                                                    <div class="mt-1 me-3">
                                                        <div class="rounded-circle d-flex justify-content-center align-items-center bg-success bg-opacity-10"
                                                            style="width: 24px; height: 24px; color: #22c55e;">
                                                            <i class='bx bx-check fs-6'></i>
                                                        </div>
                                                    </div>
                                                    <div class="flex-grow-1">
                                                        <h6 class="fw-bold mb-1 text-dark" style="font-size: 0.95rem;">
                                                            One-on-one with Sarah</h6>
                                                        <p class="fw-medium mb-0"
                                                            style="color: #94a3b8; font-size: 0.75rem;">Oct 22, 11:30 AM
                                                            • 30 mins</p>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="list-group-item text-center p-3 mt-2 border-top-0 rounded-bottom"
                                                style="background-color: #f8fafc; border-radius: 0 0 12px 12px;">
                                                <a href="#" class="fw-bold text-decoration-none small"
                                                    style="color: #64748b;">View Full History</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- TAB: SETTINGS -->
                    <div v-if="currentTab === 'settings'">
                        <h2 class="fw-bolder mb-1" style="color: #0f172a; letter-spacing: -0.5px; font-size: 2rem;">
                            Settings</h2>
                        <p class="mb-5" style="color: #64748b; font-size: 0.95rem;">Manage your profile, security, and
                            biometric authentication preferences.</p>

                        <!-- Profile Information -->
                        <div class="card border-0 shadow-sm p-4 p-md-5 mb-4" style="border-radius: 16px;">
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex justify-content-center align-items-center rounded me-3"
                                    style="background-color: #fff7ed; width: 36px; height: 36px;">
                                    <i class="bx bxs-user fs-5" style="color: #ea580c;"></i>
                                </div>
                                <h5 class="fw-bolder mb-0 text-dark">Profile Information</h5>
                            </div>
                            <div class="row g-3 mb-4">
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Full
                                        Name</label>
                                    <input type="text" v-model="settings.ho_va_ten"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="Họ và tên"
                                        style="border-radius: 10px; font-size: 0.95rem; color: #475569;">
                                </div>
                                <div class="col-md-6">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Email
                                        Address</label>
                                    <input type="email" v-model="settings.email"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="Email"
                                        style="border-radius: 10px; font-size: 0.95rem; color: #475569;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn text-white fw-bold px-4 py-2"
                                    style="background-color: #ea580c; border-radius: 10px; font-size: 0.95rem;">Update
                                    Profile</button>
                            </div>
                        </div>

                        <!-- Security -->
                        <div class="card border-0 shadow-sm p-4 p-md-5 mb-4" style="border-radius: 16px;">
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex justify-content-center align-items-center rounded me-3"
                                    style="background-color: #fff7ed; width: 36px; height: 36px;">
                                    <i class="bx bxs-lock fs-5" style="color: #ea580c;"></i>
                                </div>
                                <h5 class="fw-bolder mb-0 text-dark">Security</h5>
                            </div>
                            <div class="row g-3 mb-4">
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Current
                                        Password</label>
                                    <input type="password" v-model="settings.current_password"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="••••••••"
                                        style="border-radius: 10px; font-size: 0.95rem; letter-spacing: 2px;">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">New
                                        Password</label>
                                    <input type="password" v-model="settings.new_password"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="••••••••"
                                        style="border-radius: 10px; font-size: 0.95rem; letter-spacing: 2px;">
                                </div>
                                <div class="col-md-4">
                                    <label class="form-label fw-semibold small mb-2" style="color: #334155;">Confirm
                                        Password</label>
                                    <input type="password" v-model="settings.confirm_password"
                                        class="form-control form-control-lg bg-light border-0 shadow-none px-3"
                                        placeholder="••••••••"
                                        style="border-radius: 10px; font-size: 0.95rem; letter-spacing: 2px;">
                                </div>
                            </div>
                            <div class="d-flex justify-content-end">
                                <button class="btn text-white fw-bold px-4 py-2"
                                    style="background-color: #ea580c; border-radius: 10px; font-size: 0.95rem;">Change
                                    Password</button>
                            </div>
                        </div>

                        <!-- AI Face ID -->
                        <div class="card border-0 shadow-sm p-4 p-md-5" style="border-radius: 16px;">
                            <div class="d-flex align-items-center mb-4">
                                <div class="d-flex justify-content-center align-items-center rounded me-3"
                                    style="background-color: #fff7ed; width: 36px; height: 36px;">
                                    <i class="bx bx-face fs-5" style="color: #ea580c;"></i>
                                </div>
                                <h5 class="fw-bolder mb-0 text-dark">AI Face ID Authentication</h5>
                            </div>
                            <div class="row align-items-center g-4">
                                <div class="col-md-5 d-flex justify-content-center">
                                    <div class="position-relative d-flex justify-content-center align-items-center"
                                        style="width: 200px; height: 200px;">
                                        <div class="position-absolute rounded-circle"
                                            style="width: 200px; height: 200px; border: 2px solid #fed7aa; background: #fff7ed;">
                                        </div>
                                        <div class="position-absolute rounded-circle d-flex justify-content-center align-items-center"
                                            style="width: 150px; height: 150px; background: #f1f5f9;">
                                            <i class="bx bx-user" style="font-size: 4rem; color: #cbd5e1;"></i>
                                        </div>
                                        <div class="position-absolute"
                                            style="width: 130px; height: 2px; background: linear-gradient(90deg, transparent, #ea580c, transparent); top: 50%; opacity: 0.6;">
                                        </div>
                                        <div class="position-absolute bottom-0 bg-dark text-white px-3 py-1 rounded-pill"
                                            style="font-size: 0.7rem; font-weight: 700; letter-spacing: 1px; margin-bottom: 8px;">
                                            READY TO SCAN</div>
                                    </div>
                                </div>
                                <div class="col-md-7">
                                    <span class="badge mb-3 fw-bold px-3 py-2"
                                        style="background-color: #fef9c3; color: #854d0e; font-size: 0.75rem; border-radius: 20px;">
                                        <i class="bx bxs-circle me-1"
                                            style="font-size: 0.5rem; vertical-align: middle; color: #ca8a04;"></i>
                                        Not Configured
                                    </span>
                                    <h4 class="fw-bolder mb-2"
                                        style="color: #0f172a; font-size: 1.3rem; line-height: 1.3;">
                                        Secure your meetings with AI Face Recognition
                                    </h4>
                                    <p class="mb-4" style="color: #64748b; font-size: 0.9rem; line-height: 1.6;">
                                        Our advanced neural network ensures that only you can access sensitive meetings
                                        and recordings. Fast, secure, and encrypted at the hardware level.
                                    </p>
                                    <button
                                        class="btn text-white fw-bold px-4 py-3 d-inline-flex align-items-center gap-2"
                                        style="background-color: #0f172a; border-radius: 10px; font-size: 0.95rem;">
                                        <i class="bx bx-scan fs-5"></i> Start Face Scan
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </main>
    </div>
</template>

<script>
export default {
    name: 'TrangChinhNguoiDung',
    data() {
        return {
            currentTab: 'dashboard',
            settings: {
                ho_va_ten: '',
                email: '',
                current_password: '',
                new_password: '',
                confirm_password: '',
            }
        }
    }
}
</script>

<style scoped>
@import url('https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700&display=swap');

/* Basic reset */
* {
    font-family: 'Inter', sans-serif;
}

/* Sidebar nav */
.active-tab {
    background-color: #fff7ed;
    color: #ea580c !important;
}

.nav-link.text-dark:hover {
    background-color: #f8fafc;
}

.text-muted-hover {
    color: #64748b !important;
}

.text-muted-hover:hover {
    color: #0f172a !important;
}

/* Input placeholder */
input::placeholder,
textarea::placeholder {
    color: #94a3b8 !important;
}

input:focus,
textarea:focus {
    box-shadow: none !important;
    border-color: #cbd5e1 !important;
    background-color: #fff !important;
}

/* Scrollbar styling */
::-webkit-scrollbar {
    width: 6px;
}

::-webkit-scrollbar-track {
    background: transparent;
}

::-webkit-scrollbar-thumb {
    background: #cbd5e1;
    border-radius: 10px;
}

::-webkit-scrollbar-thumb:hover {
    background: #94a3b8;
}

/* Avatar grouping */
.avatar-group img {
    margin-left: -12px;
}

.avatar-group img:first-child {
    margin-left: 0;
}
</style>
