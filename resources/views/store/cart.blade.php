@extends('layouts.theme.master')

@section('content')

        <!-- SECTION -->
		<div class="section">
			<!-- container -->
			<div class="container">
				<!-- row -->
				<div class="row">

					<div class="container text-center">
						<div class="section-title">
							<h3 class="title"><i class="fa fa-shopping-cart"></i> Carrito de compras</h3>
						</div>
						<p>

						</p>
						@if(count($cart))
							<div class="table-responsive">
								<table class="table table-striped table-hover table-bordered">
									<thead>
									<tr>
										<th>Imagen</th>
										<th>Producto</th>
										<th>Precio</th>
										<th>Libras</th>
										<th>Cantidad</th>
										<th>Subtotal</th>
										<th>Quitar</th>
									</tr>
									</thead>
									<tbody>
									@foreach($cart as $item)
										<tr>
											<td>
												<img src="{{ URL::to('/') }}/uploads/products/{{$item->identifier}}/{{$item->images->img1}}"
													 class="img-cart"></td>
											<td>{{ $item->name }}</td>
											<td>${{ number_format($item->price,2) }}</td>
											<td>{{ number_format($item->weight * $item->quantity,0) }} lb</td>
											<td>
												<input
														type="number"
														min="1"
														max="100"
														value="{{ $item->quantity }}"
														id="product_{{ $item->id }}"
														>
												<a
														href=""
														class="btn-link btn-update-item"
														data-href="{{ route('cart-update', $item->identifier) }}"
														data-id="{{ $item->id }}"
														style="padding-left: 10px;">
													<i class="fa fa-refresh" style="color:#0066FF;font-size:18px;"></i>
												</a>

											</td>
											<td>${{ number_format($item->price * $item->quantity,2) }}</td>
											<td>
												<a href="{{ route('cart-delete', $item->identifier) }}"
												   class="btn-link">
													<i class="fa fa-remove" style="color:#FF0000;font-size:18px;"></i>
												</a>
											</td>
										</tr>
									@endforeach
									</tbody>
								</table>
								<hr>

							</div>

								<div><h3><span class="label label-success btn-circle">Total a pagar: ${{ number_format($total, 2) }}</span></h3>
								</div>
								<hr>
								<div>
									<button class="come-back-btn" onclick="window.location='{{ route('home') }}';"><i class="fa fa-chevron-circle-left"></i> Seguir Comprando</button>
									<button class="trash-cart-btn" onclick="window.location='{{ route('cart-trash') }}';"><i class="fa fa-trash"></i> Vaciar Carrito</button>
									<button class="order-detail-btn" onclick="window.location='{{ route('order-detail') }}';"> Detalles Pedido <i class="fa fa-chevron-circle-right"></i></button>
								</div>
						@else
							<h3><span class="label label-warning btn-circle">No hay productos en el carrito.</span></h3>
						@endif
					</div>
				</div>
				<!-- /row -->
			</div>
			<!-- /container -->
		</div>
		<!-- /SECTION -->

@stop