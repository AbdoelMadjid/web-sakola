@extends('admin.layouts.document832')
@section('styles')
    <link href="admin/assets/plugins/custom/prismjs/prismjs.bundle.css" rel="stylesheet" type="text/css" />
    <link href="admin/assets/bootstrap-icons/bootstrap-icons.css" rel="stylesheet" type="text/css" />
    <style>
        [x-cloak] {
            display: none !important;
        }
    </style>
@endsection
@section('content')
    <!--begin::Content-->
    <div class="docs-content d-flex flex-column flex-column-fluid" id="kt_docs_content">
        <!--begin::Container-->
        <div class="container d-flex flex-column flex-lg-row" id="kt_docs_content_container">
            <!--begin::Card-->
            <div class="card card-docs flex-row-fluid mb-2" id="kt_docs_content_card">
                <!--begin::Card Body-->
                <div class="card-body fs-6 py-15 px-10 py-lg-15 px-lg-15 text-gray-700">
                    <!--begin::Section-->
                    <div class="pb-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="overview" data-kt-scroll-offset="50">
                            <a href="#overview"></a>

                            Overview
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            <a href="https://icons.getbootstrap.com/" target="_blank" class="fw-semibold">Bootstrap
                                Icons</a>&nbsp; is a free, high quality, open source icon library with nearly 1,200 icons.
                            Include them anyway you like SVGs, SVG sprite, or web fonts.
                        </div>
                        <!--end::Block-->
                    </div>
                    <!--end::Section-->
                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="usage" data-kt-scroll-offset="50">
                            <a href="#usage"></a>

                            Usage
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            Use Bootstrap Icons with a spesific class as explained in the
                            <a class="fw-semibold" href="https://icons.getbootstrap.com/icons/alarm-fill/"
                                target="_blank">Icons Preview Page</a>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border d-flex flex-wrap p-10">

                                <i class="bi bi-bookmarks-fill fs-2x me-15"></i>
                                <i class="bi bi-calendar-check fs-2x me-15"></i>
                                <i class="bi bi-check2-square fs-2x me-15"></i>
                                <i class="bi bi-diagram-3 fs-2x me-15"></i>
                                <i class="bi bi-gear fs-2x me-15"></i>
                                <i class="bi bi-circle-square fs-2x me-15"></i>
                                <i class="bi bi-graph-down fs-2x me-15"></i>
                                <i class="bi bi-vector-pen fs-2x me-15"></i>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;i class=&quot;bi bi-bookmarks-fill fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-calendar-check fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-check2-square fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-diagram-3 fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-gear fs-2x &quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-circle-square fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-graph-down fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-vector-pen fs-2x&quot;&gt;&lt;/i&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="colors" data-kt-scroll-offset="50">
                            <a href="#colors"></a>

                            Colors
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The inline icons can be colored using <code>.text-{color}</code> class that defined with
                            <code>$theme-text-colors</code> variable in <code>sass/_variables.scss</code>:
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border d-flex flex-wrap p-10">


                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-white bg-dark"></i>
                                    <div class="fw-semibold py-2">
                                        white </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-primary "></i>
                                    <div class="fw-semibold py-2">
                                        primary </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-secondary "></i>
                                    <div class="fw-semibold py-2">
                                        secondary </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-light "></i>
                                    <div class="fw-semibold py-2">
                                        light </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-success "></i>
                                    <div class="fw-semibold py-2">
                                        success </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-info "></i>
                                    <div class="fw-semibold py-2">
                                        info </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-warning "></i>
                                    <div class="fw-semibold py-2">
                                        warning </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-danger "></i>
                                    <div class="fw-semibold py-2">
                                        danger </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-dark "></i>
                                    <div class="fw-semibold py-2">
                                        dark </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-muted "></i>
                                    <div class="fw-semibold py-2">
                                        muted </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-100 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-100 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-200 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-200 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-300 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-300 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-400 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-400 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-500 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-500 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-600 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-600 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-700 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-700 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-800 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-800 </div>
                                </div>



                                <div class="d-flex flex-column flex-center w-150px me-10 mb-5">
                                    <i class="bi bi-droplet-half fs-2x text-gray-900 "></i>
                                    <div class="fw-semibold py-2">
                                        gray-900 </div>
                                </div>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html" style="height:300px"><code class="language-html">&lt;i class=&quot;bi bi-droplet-half text-white&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-primary&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-secondary&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-light&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-success&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-info&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-warning&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-danger&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-dark&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-muted&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-100&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-200&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-300&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-400&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-500&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-600&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-700&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-800&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half text-gray-900&quot;&gt;&lt;/i&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="pt-10">

                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="sizes" data-kt-scroll-offset="50">
                            <a href="#sizes"></a>

                            Sizes
                        </h1>
                        <!--end::Heading-->


                        <!--begin::Block-->
                        <div class="py-5">
                            The font icons can be sized using <code>.fs-{size}</code> class that defined with
                            <code>$font-sizes</code> variable in <code>sass/_variables.scss</code>
                        </div>
                        <!--end::Block-->

                        <!--begin::Block-->
                        <div class="py-5">
                            Where <code>size</code> is one of:
                            <ul class="pt-3">
                                <li class="py-2"><code>1</code> - sets icon size that equals to <code>&lt;h1&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>2</code> - sets icon size that equals to <code>&lt;h2&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>3</code> - sets icon size that equals to <code>&lt;h3&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>4</code> - sets icon size that equals to <code>&lt;h4&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>5</code> - sets icon size that equals to <code>&lt;h5&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>6</code> - sets icon size that equals to <code>&lt;h6&gt; </code>
                                    font size</li>
                                <li class="py-2"><code>7</code> - sets icon size that equals to <code>&lt;h7&gt; </code>
                                    font size</li>

                                <li class="py-2"><code>7</code> - sets icon size that equals to <code>0.95 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>8</code> - sets icon size that equals to <code>0.85 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>9</code> - sets icon size that equals to <code>0.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>10</code> - sets icon size that equals to <code>0.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>

                                <li class="py-2"><code>base</code> - sets icon size that equals to
                                    <code>$font-size-base</code> where <code>$font-size-base: 1rem</code>
                                </li>
                                <li class="py-2"><code>fluid</code> - sets icon size that equals to <code>100%</code>
                                </li>

                                <li class="py-2"><code>2x</code> - sets icon size that equals to <code>2 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>2qx</code> - sets icon size that equals to <code>2.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>2hx</code> - sets icon size that equals to <code>2.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>2tx</code> - sets icon size that equals to <code>2.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3x</code> - sets icon size that equals to <code>3 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3qx</code> - sets icon size that equals to <code>3.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3hx</code> - sets icon size that equals to <code>3.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>3tx</code> - sets icon size that equals to <code>3.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4x</code> - sets icon size that equals to <code>4 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4qx</code> - sets icon size that equals to <code>4.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4hx</code> - sets icon size that equals to <code>4.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>4tx</code> - sets icon size that equals to <code>4.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5x</code> - sets icon size that equals to <code>5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5qx</code> - sets icon size that equals to <code>5.25 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5hx</code> - sets icon size that equals to <code>5.5 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                                <li class="py-2"><code>5tx</code> - sets icon size that equals to <code>5.75 of
                                        $font-size-base</code> where <code>$font-size-base: 1rem</code></li>
                            </ul>
                        </div>
                        <!--end::Block-->
                        <!--begin::Block-->
                        <div class="py-5">
                            <div class="rounded border d-flex flex-wrap p-10">

                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-5x"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-5x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-4x"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-4x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-3x"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-3x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-2tx"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2tx </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-2hx"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2hx </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-2qx"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2qx </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-2x"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2x </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-1"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-1 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-2"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-2 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-3"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-3 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-5"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-5 </div>
                                </div>


                                <div class="d-flex flex-column h-100px w-100px me-10 mb-5">
                                    <div class="d-flex flex-center flex-grow-1">
                                        <i class="bi bi-droplet-half fs-6"></i>
                                    </div>
                                    <div class="fw-semibold py-2 text-center">
                                        .fs-6 </div>
                                </div>

                            </div>
                        </div>
                        <!--end::Block-->

                        <!--begin::Code-->
                        <div class="py-5">
                            <!--begin::Highlight-->
                            <div class="highlight"> <button class="highlight-copy btn" data-bs-toggle="tooltip"
                                    title="Copy code">copy</button>
                                <div class="highlight-code">
                                    <pre class="language-html"><code class="language-html">&lt;i class=&quot;bi bi-droplet-half fs-5x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-4x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-3x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-2tx&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-2hx&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-2qx&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-2x&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-1&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-2&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-3&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-5&quot;&gt;&lt;/i&gt;
&lt;i class=&quot;bi bi-droplet-half fs-6&quot;&gt;&lt;/i&gt;</code></pre>
                                </div>
                            </div><!--end::Highlight-->
                        </div>
                        <!--end::Code-->
                    </div>
                    <!--end::Section-->

                    <!--begin::Section-->
                    <div class="py-10">
                        <!--begin::Heading-->
                        <h1 class="anchor fw-bold mb-5" id="fullicons" data-kt-scroll-offset="50">
                            <a href="#fullicons"></a>
                            Icons
                        </h1>
                        <!--end::Heading-->

                        <div x-data="iconPicker()" x-init="load()" class="mb-10">

                            {{-- Toolbar --}}
                            <div class="d-flex flex-wrap gap-3 mb-5 align-items-center">
                                <input type="text" class="form-control w-250px" placeholder="🔍 Search icon..."
                                    x-model="search">

                                <select class="form-select w-150px" x-model="size">
                                    <option value="16">16px</option>
                                    <option value="24">24px</option>
                                    <option value="32">32px</option>
                                    <option value="48">48px</option>
                                </select>

                                <input type="color" x-model="color" class="form-control form-control-color">

                                <span class="text-muted">Klik icon → copy HTML tag</span>
                            </div>

                            {{-- Icon Grid --}}
                            <div class="row row-cols-2 row-cols-sm-3 row-cols-md-4 row-cols-lg-6 g-4"
                                style="max-height:70vh; overflow:auto;">
                                <template x-for="icon in displayedIcons()" :key="icon">
                                    <div class="col">
                                        <div class="border rounded text-center p-4 h-100 cursor-pointer position-relative"
                                            @click="copy(icon); copiedIcon = icon; setTimeout(() => copiedIcon = null, 2000)">

                                            <template x-if="copiedIcon === icon">
                                                <div x-transition
                                                    class="position-absolute top-0 start-0 w-100 h-100 d-flex flex-center bg-white bg-opacity-75 rounded"
                                                    style="z-index: 10">
                                                    <span class="badge badge-success">Copied!</span>
                                                </div>
                                            </template>

                                            <i class="bi" :class="`bi-${icon}`"
                                                :style="`font-size:${size}px;color:${color}`"></i>

                                            <div class="small text-muted mt-2 text-truncate">
                                                bi-<span x-text="icon"></span>
                                            </div>
                                        </div>
                                    </div>
                                </template>
                            </div>

                            <div class="mt-3 text-center">
                                <button class="btn btn-sm btn-light" x-show="limit < filteredIcons.length"
                                    @click="loadMore()">
                                    Load more
                                </button>
                            </div>

                        </div>
                    </div>
                    <!--end::Section-->
                </div>
                <!--end::Card Body-->
            </div>
            <!--end::Card-->

            <!--begin::Sidebar wrapper-->
            <div class="ms-7 flex-row-auto w-lg-250px">
                <!--begin::Sidebar nav-->
                <div class="card card-flush d-none d-lg-flex" data-kt-sticky="true" data-kt-sticky-name="sidebar-navs"
                    data-kt-sticky-offset="{default: false, lg: 250}" data-kt-sticky-width="250px"
                    data-kt-sticky-animation="false" data-kt-sticky-left="auto" data-kt-sticky-top="25px"
                    data-kt-sticky-zindex="5">
                    <!--begin::Card body-->
                    <div class="card-body px-0 px-6 py-6 min-h-300px">
                        <!--begin::Menu-->
                        <ul id="kt_sidebar_nav"
                            class="nav nav-flush menu menu-column menu-title-gray-700 menu-bullet-gray-300 menu-state-primary fw-semibold fs-6 mb-8">
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#overview" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Overview</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#usage" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Usage</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#colors" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Colors</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#sizes" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Sizes</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                            <!--begin::Item-->
                            <li class="menu-item py-2 px-3">
                                <!--begin::Link-->
                                <a href="#fullicons" data-kt-scroll-toggle="true" class="menu-link p-0 nav-link">
                                    <span class="menu-bullet"><span class="bullet bullet-dot"></span></span>
                                    <span class="menu-title">Icons</span>
                                </a>
                                <!--end::Link-->
                            </li>
                            <!--end::Item-->
                        </ul>
                        <!--end::Menu-->


                        <a href="https://1.envato.market/Vm7VRE" class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/admin/assets/media/banners/buy-metronic.png"
                                alt="buy metronic" class="mw-100 rounded-3" data-bs-toggle="popover"
                                data-bs-trigger="hover" data-bs-html="true" data-bs-placement="top"
                                data-bs-title="<b>License Reminder</b>"
                                data-bs-content="One license allows using Metronic for a single deployment and all subsequent usage requires a separate license. <div class='mb-3'></div> If you plan to use Metronic in a Software as a Service (SaaS) model with paid subscriptions, you'll need an Extended License." />
                        </a>

                        <a href="https://keenthemes.com/products/templates-mega-bundle?utm_source=docs&utm_content=mega-bundle"
                            class="d-block mb-8">
                            <img src="https://devs.keenthemes.com/admin/assets/media/banners/mega-bundle.png"
                                alt="buy mega bundle" class="mw-100 rounded-3" />
                        </a>
                    </div>
                    <!--end::Card body-->
                </div>
                <!--end::Sidebar nav-->
            </div>
            <!--end::Sidebar wrapper-->
        </div>
        <!--end::Container-->
    </div>
    <!--end::Content-->
@endsection
@section('scripts')
    <!--begin::Vendors Javascript(used for this page only)-->
    <script src="admin/assets/plugins/custom/prismjs/prismjs.bundle.js"></script>
    <!--end::Vendors Javascript-->

    <script src="https://unpkg.com/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
    <script>
        function iconPicker() {
            return {
                icons: [],
                search: '',
                size: 32,
                color: '#000000',
                limit: 300, // jumlah awal render, biar ringan
                copiedIcon: null,

                async load() {
                    const res = await fetch('/admin/assets/icons/bootstrap-icons.json');
                    this.icons = await res.json();
                },

                get filteredIcons() {
                    if (!this.search) return this.icons;
                    return this.icons.filter(i =>
                        i.includes(this.search.toLowerCase())
                    );
                },

                displayedIcons() {
                    return this.filteredIcons.slice(0, this.limit);
                },

                loadMore() {
                    this.limit += 200; // tambah 200 icon lagi per klik
                },

                copy(icon) {
                    const html = `<i class="bi bi-${icon}" style="font-size: ${this.size}px; color: ${this.color};"></i>`;

                    // Fallback using textarea for non-secure contexts (http)
                    const textArea = document.createElement("textarea");
                    textArea.value = html;
                    textArea.style.position = "fixed";
                    textArea.style.left = "-9999px";
                    textArea.style.top = "0";
                    document.body.appendChild(textArea);
                    textArea.focus();
                    textArea.select();

                    let success = false;
                    try {
                        success = document.execCommand('copy');
                    } catch (err) {
                        console.error('execCommand copy failed', err);
                    }

                    document.body.removeChild(textArea);

                    if (success) {
                        this.notify(html);
                    } else if (navigator.clipboard) {
                        navigator.clipboard.writeText(html).then(() => {
                            this.notify(html);
                        }).catch(err => {
                            console.error('Navigator clipboard failed', err);
                        });
                    }
                },

                notify(html) {
                    if (window.toastr) {
                        toastr.success(`Copied: ${html}`);
                    } else {
                        console.log(`Copied: ${html}`);
                    }
                }
            }
        }
    </script>
@endsection


