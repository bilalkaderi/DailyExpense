import AuthenticatedLayout from '@/Layouts/AuthenticatedLayout';
import { Head } from '@inertiajs/react';


export default function Dashboard({ auth }) {
    return (
        <AuthenticatedLayout
            user={auth.user}
        >
            <Head title="Dashboard" />

              <div class="border py-7 rounded-lg m-2">
                <div class="flex">
                  <div class="flex-auto">
                    <div class="card">
                      <div class="card-body">
                        <div class="flex justify-center transition duration-300 hover:bg-gray-200 rounded-lg p-2">
                          <a href="add_expense" class="">
                            <img src="icon/addex.png" width="57" />
                            <p>Add Expenses</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-auto">
                    <div class="card ">
                      <div class="card-body">
                        <div class="flex justify-center transition duration-300 hover:bg-gray-200 rounded-lg p-2">
                          <a href="manage_expense" class="">
                            <img src="icon/maex.png" width="57" />
                            <p>Manage Expenses</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="flex-auto">
                    <div class="card">
                      <div class="card-body">
                        <div class="flex justify-center transition duration-300 hover:bg-gray-200 rounded-lg p-2">
                          <a href="profile" class="">
                            <img src="icon/prof.png" width="57" />
                            <p>User Profile</p>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
                <h3 class="mt-4">Full-Expense Report</h3>
                <div class="grid relative divide-x divide-gray-900/5 bg-gray-50">
                <div class="">
                  <div class="flex-auto">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title text-center">Yearly Expenses</h5>
                      </div>
                      <div class="card-body">
                        <canvas id="expense_line" height="150"></canvas>
                      </div>
                    </div>
                  </div>
                  <div class="flex-auto">
                    <div class="card">
                      <div class="card-header">
                        <h5 class="card-title text-center">Expense Category</h5>
                      </div>
                      <div class="card-body">
                        <canvas id="expense_category_pie" height="150"></canvas>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
        </AuthenticatedLayout>
    );
}
