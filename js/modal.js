class ModalBiasa extends HTMLElement {
    connectedCallback() {
        const judul = this.getAttribute("judul");
        const idModal = this.getAttribute("idModal");
        const isi = this.getAttribute("isi");
        const gambar = this.getAttribute("gambar");
        const imageElement = document.createElement("img");
        imageElement.src = gambar;
        this.appendChild(imageElement);

        this.innerHTML = `
        <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="${idModal}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div class="flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                        <!-- Close button
                        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button> -->
                        <!--Modal title-->
                        <div id="exampleModalLabel" class="flex flex-col items-center">
                            <img src="${gambar}" alt="" class="w-20 h-20 mb-3" />
                            <h5 class="text-xl font-medium leading-normal text-neutral-800">${judul}</h5>
                        </div>
                    </div>

                    <!--Modal body-->
                    <div class="relative flex-auto p-4" data-te-modal-body-ref>
                        ${isi}
                    </div>

                    <!--Modal footer-->
                    <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4">
                        <button
                            type="button"
                            class="inline-block rounded bg-primary-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-100 transition duration-150 ease-in-out hover:bg-primary-600 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                            data-te-modal-dismiss
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>`;
    }
}
customElements.define("modal-biasa", ModalBiasa);

class ModalDGLink extends HTMLElement {
    connectedCallback() {
        const judul = this.getAttribute("judul");
        const idModal = this.getAttribute("idModal");
        const isi = this.getAttribute("isi");
        const gambar = this.getAttribute("gambar");
        const imageElement = document.createElement("img");
        imageElement.src = gambar;
        this.appendChild(imageElement);
        const link = this.getAttribute("link");
        const linkElement = document.createElement("a");
        linkElement.href = link;
        linkElement.textContent = this.textContent;
        const isiLink = this.getAttribute("isiLink");

        this.innerHTML = `
        <div data-te-modal-init class="fixed left-0 top-0 z-[1055] hidden h-full w-full overflow-y-auto overflow-x-hidden outline-none" id="${idModal}" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div data-te-modal-dialog-ref class="pointer-events-none relative w-auto translate-y-[-50px] opacity-0 transition-all duration-300 ease-in-out min-[576px]:mx-auto min-[576px]:mt-7 min-[576px]:max-w-[500px]">
                <div class="min-[576px]:shadow-[0_0.5rem_1rem_rgba(#000, 0.15)] pointer-events-auto relative flex w-full flex-col rounded-md border-none bg-white bg-clip-padding text-current shadow-lg outline-none dark:bg-neutral-600">
                    <div class="flex-shrink-0 items-center justify-between rounded-t-md border-b-2 border-neutral-100 border-opacity-100 p-4">
                        <!-- Close button
                        <button type="button" class="box-content rounded-none border-none hover:no-underline hover:opacity-75 focus:opacity-100 focus:shadow-none focus:outline-none" data-te-modal-dismiss aria-label="Close">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="h-6 w-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M6 18L18 6M6 6l12 12" />
                            </svg>
                        </button> -->
                        <!--Modal title-->
                        <div id="exampleModalLabel" class="flex flex-col items-center">
                            <img src="${gambar}" alt="" class="w-20 h-20 mb-3" />
                            <h5 class="text-xl font-medium leading-normal text-neutral-800">${judul}</h5>
                        </div>
                    </div>

                    <!--Modal body-->
                    <div class="relative flex-auto p-4" data-te-modal-body-ref>
                        ${isi}
                        <a href="${link}">${isiLink}</a>
                    </div>

                    <!--Modal footer-->
                    <div class="flex flex-shrink-0 flex-wrap items-center justify-end rounded-b-md border-t-2 border-neutral-100 border-opacity-100 p-4">
                        <button
                            type="button"
                            class="inline-block rounded bg-primary-700 px-6 pb-2 pt-2.5 text-xs font-medium uppercase leading-normal text-primary-100 transition duration-150 ease-in-out hover:bg-primary-600 focus:bg-primary-accent-200 focus:outline-none focus:ring-0 active:bg-primary-accent-200"
                            data-te-modal-dismiss
                            data-te-ripple-init
                            data-te-ripple-color="light">
                            OK
                        </button>
                    </div>
                </div>
            </div>
        </div>`;
    }
}
customElements.define("modal-link", ModalDGLink);
