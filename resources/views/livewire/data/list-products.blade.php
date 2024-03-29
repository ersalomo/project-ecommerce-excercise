<div class="page-breadcrumb bg-white">
    <div class="page-body">

        <div class="container-xl">
            <div class="row row-deck row-cards">
                <div class="col-12">

                    <div class="card">

                        <div class="card-header">
                            <h2 class="card-title mx-auto fs-2">Products</h2>
                            <button class="btn btn-primary btn card-title" wire:click="openModalAdd()">Tambah
                                Data</button>
                        </div>

                        @if (Session::has('success'))
                            <div class="alert alert-important alert-success alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <path d="M5 12l5 5l10 -10"></path>
                                        </svg>
                                    </div>
                                    <div>
                                        {{ Session::get('success') }}
                                    </div>
                                </div>
                                <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                            {{-- @if (Session::has('success'))
                            <div class="alert alert-info mx-auto col-3" role="alert">
                                {{ Session::get('success') }}
                            </div> --}}
                        @elseif (Session::has('fail'))
                            <span class="alert alert-danger mx-auto col-3" role="alert">
                                {{ Session::get('fail') }}
                            </span>
                        @endif
                        @if (Session::has('info'))
                            <div class="alert alert-important alert-info alert-dismissible" role="alert">
                                <div class="d-flex">
                                    <div>
                                        <!-- Download SVG icon from http://tabler-icons.io/i/info-circle -->
                                        <svg xmlns="http://www.w3.org/2000/svg" class="icon alert-icon" width="24"
                                            height="24" viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                            fill="none" stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                            <circle cx="12" cy="12" r="9"></circle>
                                            <line x1="12" y1="8" x2="12.01" y2="8"></line>
                                            <polyline points="11 12 12 12 12 16 13 16"></polyline>
                                        </svg>
                                    </div>
                                    <div>
                                        {{ Session::get('info') }}
                                    </div>
                                </div>
                                <a class="btn-close btn-close-white" data-bs-dismiss="alert" aria-label="close"></a>
                            </div>
                        @endif

                        <div class="card-body border-bottom py-3">
                            <div class="d-flex">
                                <div class="text-muted">
                                    Show
                                    <div class="mx-2 d-inline-block">
                                        <select wire:model="paginator" class="form-control form-control-sm"
                                            id="">
                                            @php
                                                $total = $products->count();
                                            @endphp
                                            @if ($total <= 0)
                                                <option value="{{ $total }}">{{ $total }}</option>
                                            @else
                                                @for ($i = 0; $i <= 50; $i += 5)
                                                    <option value="{{ $i }}">{{ $i }}</option>
                                                @endfor
                                            @endif
                                        </select>

                                    </div>
                                    entries
                                </div>
                                <div class="ms-auto text-muted">
                                    Search:
                                    <div class="ms-2 d-inline-block">
                                        <input type="text" class="form-control form-control-sm"
                                            aria-label="Search invoice">
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="table-responsive">
                            <table class="table card-table table-vcenter text-nowrap datatable">
                                <thead>
                                    <tr>
                                        <th class="w-1"><input class="form-check-input m-0 align-middle"
                                                type="checkbox" aria-label="Select all invoices"></th>
                                        <th class="w-1">No.
                                            <!-- Download SVG icon from http://tabler-icons.io/i/chevron-up -->
                                            <svg xmlns="http://www.w3.org/2000/svg"
                                                class="icon icon-sm text-dark icon-thick" width="24" height="24"
                                                viewBox="0 0 24 24" stroke-width="2" stroke="currentColor"
                                                fill="none" stroke-linecap="round" stroke-linejoin="round">
                                                <path stroke="none" d="M0 0h24v24H0z" fill="none"></path>
                                                <polyline points="6 15 12 9 18 15"></polyline>
                                            </svg>
                                        </th>
                                        <th>Nama Product</th>
                                        <th>Category</th>
                                        <th>Image</th>
                                        <th>Price</th>
                                        <th>Desc</th>
                                        <th>Created_at</th>
                                        <th>Update_at</th>
                                        <th></th>
                                    </tr>
                                </thead>
                                <tbody>

                                    @foreach ($products as $product)
                                        <tr>
                                            <td><input class="form-check-input m-0 align-middle" type="checkbox"
                                                    aria-label="Select invoice"></td>
                                            <td><span
                                                    class="text-muted">{{ $loop->iteration + $products->firstItem() - 1 }}</span>
                                            </td>
                                            <td>{{ $product->product_name }}</td>
                                            <td>
                                                {{-- <span class="flag flag-country-pl"></span> --}}
                                                {{ $product->getCategoryName->category_name }}
                                            </td>
                                            <td>
                                                <img src="{{ asset('image/products/' . $product->image) }}"
                                                    alt="">
                                            </td>
                                            <td>Rp.
                                                {{ number_format($product->price, 3) }}
                                            </td>
                                            <td>
                                                <span class="d-inline-block text-truncate " data-bs-toggle="tooltip"
                                                    data-bs-placement="top" title=" {{ $product->description }}"
                                                    style="max-width: 100px;">
                                                    {{ $product->description }}
                                                </span>

                                            </td>
                                            <td>
                                                <span class="badge bg-success me-1"></span>
                                                {{ $product->created_at }}

                                            </td>
                                            <td>{{ $product->updated_at }}</td>
                                            <td class="text-end">
                                                <span class="dropdown">
                                                    <button class="btn dropdown-toggle align-text-top"
                                                        data-bs-boundary="viewport"
                                                        data-bs-toggle="dropdown">Actions</button>
                                                    <div class="dropdown-menu dropdown-menu-end">
                                                        <button wire:click="show({{ $product->id }})"
                                                            class="ml-1 btn btn-info btn-sm" href="#">
                                                            show
                                                        </button><br>
                                                        <button wire:click="editProduct({{ $product->id }})"
                                                            class="ml-1 my-1 btn btn-warning btn-sm">
                                                            edit
                                                        </button><br>
                                                        <button wire:click.prevent="delete({{ $product->id }})"
                                                            class="ml-1 btn btn-danger btn-sm" href="#">
                                                            delete
                                                        </button><br>
                                                    </div>
                                                </span>
                                            </td>
                                        </tr>
                                    @endforeach

                                </tbody>
                            </table>
                        </div>
                        <div class="card-footer d-flex align-items-center">
                            <p class="m-0 text-muted">Showing <span>1</span> to
                                <span>{{ $products->perPage() }}</span> of
                                <span>{{ $products->total() }}</span>
                                entries
                            </p>

                            <ul class="pagination m-0 ms-auto">
                                {{ $products->links() }}

                            </ul>
                        </div>
                    </div>
                </div>
            </div>

        </div>
        @include('admin.pages.data.modals.add-product')
    </div>
    @include('admin.pages.data.modals.product-edit')
    @push('scripts')
        <script>
            window.addEventListener('openModalAdd', (e) => {
                $('.addProduct').find('span').html('')
                $('.addProduct').modal('show');
            })
            window.addEventListener('showProduct', function(e) {
                $('.editProduct #formShow').find('input').attr('disabled', true);
                $('.editProduct #formShow').find('.btnDisabled').attr('disabled', true);
                $('form#uploadImage').find('.btnDisabled').attr('disabled', true);
                $('.editProduct h5').html("Show data product")
                $('.editProduct').modal('show');
            })
            window.addEventListener('editproduct', function(event) {
                // alert(event.detail.id);
                $('.editProduct').find('span').html('');
                $('.editProduct').modal('show');
            });
            window.addEventListener('CloseEditCountryModal', (e) => {
                $('.editProduct').modal('hide')
                $('.addProduct').modal('hide');

            })
            window.addEventListener('addProdcut', (e) => {
                Livewire.emit('productAdd');
                alert('adad')
            })
            $(function() {
                $("button.button-close").on('click', function() {
                    $(this).click(() => {
                        $('.editProduct').modal('hide')
                        $('.addProduct').modal('hide')

                    })
                })
                $('[data-toggle="tooltip"]').tooltip()
                // $("#addImageProduct").ijaboCropTool({
                //     preview: '',
                //     setRatio: 1,
                //     allowedExtensions: ['jpg', 'jpeg', 'png'],
                //     buttonsText: ['CROP', 'QUIT'],
                //     buttonsColor: ['#30bf7d', '#ee5155', -15],
                //     processUrl: "{{ route('admin.addProduct') }}",
                //     withCSRF: ['_token', '{{ csrf_token() }}'],
                //     onSuccess: function(message, element, status) {
                //         Livewire.emit('productAdd');
                //         toastr.success(message)
                //     },
                //     onError: function(message, element, status) {
                //         toastr.error(message)
                //     }
                // });

            })
        </script>
    @endpush
    {{-- $ --}}
