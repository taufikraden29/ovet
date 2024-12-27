<!DOCTYPE html>
<html lang="en" class="light-style layout-menu-fixed" dir="ltr" data-theme="theme-default"
    data-assets-path="../assets/" data-template="vertical-menu-template-free">
<x-header></x-header>

<body>
    <div class="layout-wrapper layout-content-navbar">
        <div class="layout-container">
            <x-aside></x-aside>
            <div class="layout-page">
                <x-navbar></x-navbar>
                <div class="content-wrapper">
                    <div class="container-xxl flex-grow-1 container-p-y">
                        <div class="row">
                            {{ $slot }}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <x-footer></x-footer>
</body>

</html>
