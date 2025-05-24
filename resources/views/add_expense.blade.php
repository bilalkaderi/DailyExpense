<link rel="stylesheet" href="css/style.css">
<div id="page-content-wrapper" class="mt-20">
    <div class="">
        <h3 class="mt-4  text-center py-8 border-l border-t rounded-md">Add Your Daily Expenses</h3>
        <hr />
        <div class="row py-6 px-12 border-l-8 border-t-8 rounded-md">
        <div>
            <form action="expense" method="get">
              <div class="flex">
                  <div class="flex-1">
                    <div class="form-group row">
                        <label for="expenseamount" class=""><b>Enter Amount</b></label>
                        <div class="sm:w-1/2">
                          <input type="text" pattern="^[0-9]*(\.[0-9]+)?$" name="expenseamount" id="expenseamount" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="$ 0.00" required />
                        </div>
                    </div>
                    <div class="form-group row">
                        <label for="expensedate" class=" col-form-label"><b>Date</b></label>
                        <div class="sm:w-1/2">
                            <input type="date" name="expensedate" id="expensedate" class="block w-full rounded-md border-0 py-1.5 pl-7 pr-20 text-gray-900 ring-1 ring-inset ring-gray-300 placeholder:text-gray-400 focus:ring-2 focus:ring-inset focus:ring-indigo-600 sm:text-sm sm:leading-6" placeholder="0.00" required />
                        </div>
                      </div>
                  </div>
                  <div class="flex-1">
                  <label for="expensecategory" class=" col-form-label"><b>Category</b></label>
                    <div>
                    <select class="z-2 absolute mt-1 sm:w-1/4 rounded bg-gray-50 ring-1 ring-gray-300" name="expensecategory" id="expensecategory">
                        <option class="select-none p-2 hover:bg-gray-200" value="Medicine">Medicine</option>
                        <option class="select-none p-2 hover:bg-gray-200" value="Food">Food</option>
                        <option class="select-none p-2 hover:bg-gray-200" value="Bills & Recharges">Bills & Recharges</option>
                        <option class="select-none p-2 hover:bg-gray-200" value="Entertainment">Entertainment</option>
                        <option class="select-none p-2 hover:bg-gray-200" value="Clothings">Clothings</option>
                        <option class="select-none p-2 hover:bg-gray-200" value="Rent">Rent</option>
                        <option class="select-none p-2 hover:bg-gray-200" value="Household Items">Household Items</option>
                        <option class="select-none p-2 hover:bg-gray-200" value="Other">Other</option>
                    </select>
                    </div>
                    </div>
                  </div>
                    <div class="form-group row">
                        <div class="col-md-12 text-right">
                        <div class="bg-white p-4">
                          <button type="submit" name="add" class="inline-flex items-center px-4 py-2 bg-gray-200 hover:bg-gray-300 text-gray-800 text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 8h14M5 8a2 2 0 110-4h14a2 2 0 110 4M5 8v10a2 2 0 002 2h10a2 2 0 002-2V8m-9 4h4" />
                            </svg>

                            Save
                          </button>


                          <button type="submit" name="update" class="inline-flex items-center px-4 py-2 bg-indigo-500 hover:bg-indigo-600 text-white text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M3 10h10a8 8 0 018 8v2M3 10l6 6m-6-6l6-6" />
                            </svg>

                            Update
                          </button>

                          <button type="submit" name="delete" class="inline-flex items-center px-4 py-2 bg-red-600 hover:bg-red-700 text-white text-sm font-medium rounded-md">
                            <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5 mr-2" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                              <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16" />
                            </svg>
                            Delete
                          </button>
                        </div>

                        </div>
                    </div>
                </form>
            </div>

            <div class="col-md-3"></div>

            </div>
        </div>
    </div>
