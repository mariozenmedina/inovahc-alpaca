<?php 
    $current_page = 'forms';
    get_header();
?>

<main >
      <section class="container mx-auto p-6 form-inovahc">
     
        <article>
          <div class="mx-auto max-w-xl py-12 md:max-w-4xl">
            <h2 class="text-2xl font-bold">Form Underline</h2>
            <div
              class="mt-8 grid grid-cols-1 items-start gap-6 md:grid-cols-2"
            >
              <div class="grid grid-cols-1 gap-6">
                <label for="text-input" class="block">
                  <span class="text-label">Input (text)</span>
                  <input
                    id="text-input"
                    type="text"
                    class="input mt-1 block w-full"
                    placeholder="Enter text"
                    aria-label="Input (text)"
                  />
                </label>
                <label for="email-input" class="block">
                  <span class="text-label">Input (email)</span>
                  <input
                    id="email-input"
                    type="email"
                    class="input mt-1 block w-full"
                    placeholder="john@example.com"
                    aria-label="Input (email)"
                  />
                </label>
                <label for="multiple-email-input" class="block">
                  <span class="text-label">Input (email, multiple)</span>
                  <input
                    id="multiple-email-input"
                    type="email"
                    multiple
                    class="input mt-1 block w-full"
                    placeholder="john@example.com"
                    aria-label="Input (email, multiple)"
                  />
                </label>
                <label for="password-input" class="block">
                  <span class="text-label">Input (password)</span>
                  <input
                    id="password-input"
                    type="password"
                    class="input mt-1 block w-full"
                    placeholder="Enter password"
                    aria-label="Input (password)"
                  />
                </label>
                <label for="date-input" class="block">
                  <span class="text-label">Input (date)</span>
                  <input
                    id="date-input"
                    type="date"
                    class="input mt-1 block w-full"
                    aria-label="Input (date)"
                  />
                </label>
                <label for="datetime-local-input" class="block">
                  <span class="text-label">Input (datetime-local)</span>
                  <input
                    id="datetime-local-input"
                    type="datetime-local"
                    class="input mt-1 block w-full"
                    aria-label="Input (datetime-local)"
                  />
                </label>
                <label for="month-input" class="block">
                  <span class="text-label">Input (month)</span>
                  <input
                    id="month-input"
                    type="month"
                    class="input mt-1 block w-full"
                    aria-label="Input (month)"
                  />
                </label>
                <label for="number-input" class="block">
                  <span class="text-label">Input (number)</span>
                  <input
                    id="number-input"
                    type="number"
                    class="input mt-1 block w-full"
                    aria-label="Input (number)"
                  />
                </label>
                <label for="search-input" class="block">
                  <span class="text-label">Input (search)</span>
                  <input
                    id="search-input"
                    type="search"
                    class="input mt-1 block w-full"
                    aria-label="Input (search)"
                  />
                </label>
                <label for="time-input" class="block">
                  <span class="text-label">Input (time)</span>
                  <input
                    id="time-input"
                    type="time"
                    class="input mt-1 block w-full"
                    aria-label="Input (time)"
                  />
                </label>
                <label for="week-input" class="block">
                  <span class="text-label">Input (week)</span>
                  <input
                    id="week-input"
                    type="week"
                    class="input mt-1 block w-full"
                    aria-label="Input (week)"
                  />
                </label>
                <!-- ... (other input fields) ... -->
              </div>
              <div class="grid grid-cols-1 gap-6">
                <label for="tel-input" class="block">
                  <span class="text-label">Input (tel)</span>
                  <input
                    id="tel-input"
                    type="tel"
                    multiple
                    class="input mt-1 block w-full"
                    placeholder="Enter phone number"
                    aria-label="Input (tel)"
                  />
                </label>
                <label for="url-input" class="block">
                  <span class="text-label">Input (url)</span>
                  <input
                    id="url-input"
                    type="url"
                    multiple
                    class="input mt-1 block w-full"
                    placeholder="http://www.example.com"
                    aria-label="Input (url)"
                  />
                </label>
                <label for="select-input" class="block">
                  <span class="text-label">Select</span>
                  <select
                    id="select-input"
                    class="select mt-1 block w-full"
                    aria-label="Select"
                  >
                    <option>Option 1</option>
                    <option>Option 2</option>
                  </select>
                </label>
                <label for="select-size-input" class="block">
                  <span class="text-label">Select (single, with size)</span>
                  <select
                    id="select-size-input"
                    class="select mt-1 block w-full"
                    size="3"
                    aria-label="Select (single, with size)"
                  >
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                  </select>
                </label>
                <label for="multiselect-input" class="block">
                  <span class="text-label">Select (multiple)</span>
                  <select
                    id="multiselect-input"
                    class="multiselect mt-1 block w-full"
                    multiple
                    aria-label="Select (multiple)"
                  >
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                  </select>
                </label>
                <label for="multiselect-size-input" class="block">
                  <span class="text-label">Select (multiple, with size)</span>
                  <select
                    id="multiselect-size-input"
                    class="multiselect mt-1 block w-full"
                    multiple
                    size="3"
                    aria-label="Select (multiple, with size)"
                  >
                    <option>Option 1</option>
                    <option>Option 2</option>
                    <option>Option 3</option>
                    <option>Option 4</option>
                    <option>Option 5</option>
                  </select>
                </label>
                <label for="textarea-input" class="block">
                  <span class="text-label">Textarea</span>
                  <textarea
                    id="textarea-input"
                    class="textarea mt-1 block h-24 w-full"
                    rows="3"
                    placeholder="Enter some long form content."
                    aria-label="Textarea"
                  ></textarea>
                </label>
                <fieldset class="block">
                  <legend class="text-label">Checkboxes</legend>
                  <div class="mt-2">
                    <div>
                      <label for="checkbox1" class="inline-flex items-center">
                        <input
                          id="checkbox1"
                          class="checkbox"
                          type="checkbox"
                          checked
                        />
                        <span class="ml-2">Option 1</span>
                      </label>
                    </div>
                    <div>
                      <label for="checkbox2" class="inline-flex items-center">
                        <input
                          id="checkbox2"
                          class="checkbox"
                          type="checkbox"
                        />
                        <span class="ml-2">Option 2</span>
                      </label>
                    </div>
                    <div>
                      <label for="checkbox3" class="inline-flex items-center">
                        <input
                          id="checkbox3"
                          class="checkbox"
                          type="checkbox"
                        />
                        <span class="ml-2">Option 3</span>
                      </label>
                    </div>
                  </div>
                </fieldset>
                <fieldset class="block">
                  <legend class="text-label">Radio Buttons</legend>
                  <div class="mt-2">
                    <div>
                      <label for="radio1" class="inline-flex items-center">
                        <input
                          id="radio1"
                          class="radio"
                          type="radio"
                          checked
                          name="radio-direct"
                          value="1"
                        />
                        <span class="ml-2">Option 1</span>
                      </label>
                    </div>
                    <div>
                      <label for="radio2" class="inline-flex items-center">
                        <input
                          id="radio2"
                          class="radio"
                          type="radio"
                          name="radio-direct"
                          value="2"
                        />
                        <span class="ml-2">Option 2</span>
                      </label>
                    </div>
                    <div>
                      <label for="radio3" class="inline-flex items-center">
                        <input
                          id="radio3"
                          class="radio"
                          type="radio"
                          name="radio-direct"
                          value="3"
                        />
                        <span class="ml-2">Option 3</span>
                      </label>
                    </div>
                  </div>
                </fieldset>
              </div>
            </div>
          </div>
        </article>

        <article>
          <div class="mx-auto max-w-4xl py-12">
            <h2 class="text-2xl font-bold">Untouched</h2>

            <div class="mt-8 grid grid-cols-2 items-start gap-6">
              <div class="grid grid-cols-1 gap-6">
                <label class="block">
                  <span class="text-gray-700">Input (range)</span>
                  <input type="range" class="mt-1 block w-full" />
                </label>
                <label class="block">
                  <span class="text-gray-700">Input (color)</span>
                  <input type="color" class="mt-1 block w-full" />
                </label>
                <label class="block">
                  <span class="text-gray-700">Input (file)</span>
                  <input type="file" class="mt-1 block w-full" />
                </label>
                <label class="block">
                  <span class="text-gray-700">Input (file, multiple)</span>
                  <input type="file" multiple class="mt-1 block w-full" />
                </label>
              </div>
            </div>
          </div>
        </article>
      </section>

</main>

<?php get_footer(); ?>