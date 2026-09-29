@extends('layouts.app')

@section('title', 'Tienda de granizados')

@section('content')
<div x-data="granizadosShop()" x-init="load()" class="min-h-screen bg-gray-50">
    <section class="bg-gradient-to-r from-pink-500 via-red-500 to-yellow-500 py-16 text-white">
        <div class="mx-auto flex max-w-7xl flex-col gap-6 px-6 lg:flex-row lg:items-center lg:justify-between">
            <div>
                <h1 class="text-5xl font-extrabold md:text-6xl">Nuestros granizados 🍧</h1>
                <p class="mt-4 text-xl font-semibold">Elige tus sabores, arma tu carrito y completa tu compra.</p>
            </div>
            <button type="button" @click="cartOpen = true" class="rounded-2xl bg-white px-7 py-4 text-lg font-extrabold text-purple-700 shadow-xl">
                🛒 Ver carrito (<span x-text="count"></span>)
            </button>
        </div>
    </section>

    <section class="mx-auto max-w-7xl px-6 py-14">
        <div class="grid grid-cols-1 gap-8 sm:grid-cols-2 lg:grid-cols-3">
            @foreach ($productos as $producto)
                <article class="flex flex-col overflow-hidden rounded-3xl bg-white shadow-xl transition hover:-translate-y-1">
                    @if ($producto->imagen)
                        <img src="{{ $producto->imagen }}" alt="{{ $producto->nombre }}" class="h-64 w-full object-cover" loading="lazy">
                    @else
                        <div class="flex h-64 items-center justify-center bg-gradient-to-br from-pink-100 to-yellow-100 text-7xl">🍧</div>
                    @endif
                    <div class="flex flex-1 flex-col p-6">
                        <h2 class="text-2xl font-extrabold text-pink-600">{{ $producto->nombre }}</h2>
                        <p class="mt-3 flex-1 text-gray-600">{{ $producto->descripcion }}</p>
                        <div class="mt-6 flex items-center justify-between gap-4">
                            <p class="text-2xl font-extrabold text-purple-700">${{ number_format((float) $producto->precio, 0, ',', '.') }}</p>
                            <button
                                type="button"
                                data-name="{{ $producto->nombre }}"
                                data-price="{{ (float) $producto->precio }}"
                                @click="add($el.dataset.name, Number($el.dataset.price))"
                                class="rounded-xl bg-gradient-to-r from-pink-500 to-purple-600 px-5 py-3 font-bold text-white shadow-lg hover:opacity-90">
                                Agregar
                            </button>
                        </div>
                    </div>
                </article>
            @endforeach
        </div>
    </section>

    <div x-show="cartOpen" x-cloak class="fixed inset-0 z-50 flex justify-end bg-black/50" @keydown.escape.window="cartOpen = false">
        <aside class="h-full w-full max-w-lg overflow-y-auto bg-white p-6 shadow-2xl" @click.outside="cartOpen = false">
            <div class="flex items-center justify-between">
                <h2 class="text-3xl font-extrabold text-gray-900">Tu carrito</h2>
                <button type="button" @click="cartOpen = false" class="text-3xl text-gray-500" aria-label="Cerrar">×</button>
            </div>

            <p x-show="cart.length === 0" class="mt-10 rounded-2xl bg-gray-100 p-8 text-center text-gray-600">Tu carrito está vacío.</p>

            <div class="mt-8 space-y-4">
                <template x-for="(item, index) in cart" :key="item.name">
                    <div class="rounded-2xl border border-gray-200 p-4">
                        <div class="flex justify-between gap-4">
                            <div>
                                <h3 class="font-bold text-gray-900" x-text="item.name"></h3>
                                <p class="text-purple-700" x-text="money(item.price)"></p>
                            </div>
                            <button type="button" @click="remove(index)" class="text-sm font-semibold text-red-600">Eliminar</button>
                        </div>
                        <div class="mt-3 flex items-center gap-3">
                            <button type="button" @click="change(index, -1)" class="h-9 w-9 rounded-full bg-gray-200 font-bold">−</button>
                            <span class="min-w-6 text-center font-bold" x-text="item.quantity"></span>
                            <button type="button" @click="change(index, 1)" class="h-9 w-9 rounded-full bg-gray-200 font-bold">+</button>
                            <span class="ml-auto font-extrabold" x-text="money(item.price * item.quantity)"></span>
                        </div>
                    </div>
                </template>
            </div>

            <div x-show="cart.length > 0" class="mt-8 border-t pt-6">
                <div class="flex justify-between text-2xl font-extrabold"><span>Total</span><span x-text="money(total)"></span></div>
                <button type="button" @click="checkoutOpen = true; cartOpen = false" class="mt-6 w-full rounded-2xl bg-gradient-to-r from-pink-500 to-purple-600 py-4 text-lg font-extrabold text-white shadow-lg">Comprar ahora</button>
            </div>
        </aside>
    </div>

    <div x-show="checkoutOpen" x-cloak class="fixed inset-0 z-50 overflow-y-auto bg-black/60 p-4" @keydown.escape.window="checkoutOpen = false">
        <div class="mx-auto my-8 max-w-2xl rounded-3xl bg-white p-7 shadow-2xl">
            <div class="flex items-center justify-between">
                <h2 class="text-3xl font-extrabold">Finalizar compra</h2>
                <button type="button" @click="checkoutOpen = false" class="text-3xl text-gray-500">×</button>
            </div>
            <p class="mt-2 text-sm text-gray-500">Compra de demostración: no se procesa ni almacena información bancaria real.</p>

            <form @submit.prevent="finish()" class="mt-7 space-y-5">
                <div class="grid gap-5 sm:grid-cols-2">
                    <label class="font-semibold text-gray-700">Nombre completo
                        <input x-model.trim="customer.name" required autocomplete="name" class="mt-2 w-full rounded-xl border-gray-300" type="text">
                    </label>
                    <label class="font-semibold text-gray-700">Teléfono
                        <input x-model.trim="customer.phone" required autocomplete="tel" class="mt-2 w-full rounded-xl border-gray-300" type="tel" pattern="[0-9 +()-]{7,20}">
                    </label>
                </div>
                <label class="block font-semibold text-gray-700">Dirección de entrega
                    <input x-model.trim="customer.address" required autocomplete="street-address" class="mt-2 w-full rounded-xl border-gray-300" type="text">
                </label>
                <label class="block font-semibold text-gray-700">Método de pago
                    <select x-model="customer.method" required class="mt-2 w-full rounded-xl border-gray-300">
                        <option value="">Selecciona una opción</option>
                        <option value="Contra entrega">Pago contra entrega</option>
                        <option value="Nequi">Nequi (demostración)</option>
                        <option value="Tarjeta">Tarjeta (demostración)</option>
                    </select>
                </label>

                <div x-show="customer.method === 'Nequi'" class="rounded-2xl bg-purple-50 p-4 text-sm text-purple-800">Ingresa el teléfono asociado a Nequi. No se enviará ni guardará.</div>
                <div x-show="customer.method === 'Tarjeta'" class="grid gap-4 rounded-2xl bg-gray-50 p-5 sm:grid-cols-2">
                    <label class="sm:col-span-2 font-semibold">Número de tarjeta de prueba
                        <input :required="customer.method === 'Tarjeta'" inputmode="numeric" autocomplete="off" maxlength="19" placeholder="0000 0000 0000 0000" class="mt-2 w-full rounded-xl border-gray-300" type="text">
                    </label>
                    <label class="font-semibold">Vencimiento
                        <input :required="customer.method === 'Tarjeta'" autocomplete="off" placeholder="MM/AA" maxlength="5" class="mt-2 w-full rounded-xl border-gray-300" type="text">
                    </label>
                    <label class="font-semibold">CVV de prueba
                        <input :required="customer.method === 'Tarjeta'" inputmode="numeric" autocomplete="off" maxlength="4" placeholder="000" class="mt-2 w-full rounded-xl border-gray-300" type="password">
                    </label>
                </div>

                <div class="flex justify-between rounded-2xl bg-pink-50 p-5 text-xl font-extrabold"><span>Total a pagar</span><span x-text="money(total)"></span></div>
                <button type="submit" class="w-full rounded-2xl bg-green-600 py-4 text-lg font-extrabold text-white shadow-lg hover:bg-green-700">Confirmar compra</button>
            </form>
        </div>
    </div>

    <div x-show="successOpen" x-cloak class="fixed inset-0 z-50 flex items-center justify-center bg-black/60 p-4">
        <div class="max-w-md rounded-3xl bg-white p-9 text-center shadow-2xl">
            <div class="text-7xl">✅</div>
            <h2 class="mt-5 text-3xl font-extrabold text-green-700">¡Compra exitosa!</h2>
            <p class="mt-3 text-gray-600">Tu pedido <strong x-text="orderNumber"></strong> fue registrado para demostración.</p>
            <button type="button" @click="successOpen = false" class="mt-7 rounded-2xl bg-purple-600 px-7 py-3 font-bold text-white">Seguir comprando</button>
        </div>
    </div>
</div>

<script>
function granizadosShop() {
    return {
        cart: [], cartOpen: false, checkoutOpen: false, successOpen: false, orderNumber: '',
        customer: { name: '', phone: '', address: '', method: '' },
        load() { try { this.cart = JSON.parse(localStorage.getItem('granizados-cart')) || []; } catch (error) { this.cart = []; } },
        save() { localStorage.setItem('granizados-cart', JSON.stringify(this.cart)); },
        add(name, price) {
            const found = this.cart.find(item => item.name === name);
            found ? found.quantity++ : this.cart.push({ name: name, price: price, quantity: 1 });
            this.save(); this.cartOpen = true;
        },
        change(index, amount) { this.cart[index].quantity += amount; if (this.cart[index].quantity < 1) this.cart.splice(index, 1); this.save(); },
        remove(index) { this.cart.splice(index, 1); this.save(); },
        money(value) { return new Intl.NumberFormat('es-CO', { style: 'currency', currency: 'COP', maximumFractionDigits: 0 }).format(value); },
        finish() {
            if (!this.cart.length) return;
            this.orderNumber = '#GR-' + Date.now().toString().slice(-6);
            this.cart = []; this.save(); this.checkoutOpen = false; this.successOpen = true;
            this.customer = { name: '', phone: '', address: '', method: '' };
        },
        get count() { return this.cart.reduce((sum, item) => sum + item.quantity, 0); },
        get total() { return this.cart.reduce((sum, item) => sum + item.price * item.quantity, 0); }
    };
}
</script>
@endsection
