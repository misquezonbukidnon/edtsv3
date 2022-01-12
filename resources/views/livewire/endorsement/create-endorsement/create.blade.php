<!-- This example requires Tailwind CSS v2.0+ -->
<div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
  <!-- This example requires Tailwind CSS v2.0+ -->
  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="bg-white shadow overflow-hidden sm:rounded-lg">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Applicant Information
      </h3>
    </div>
    <div class="border-t border-gray-200 px-4 py-5 sm:p-0">
      <dl class="sm:divide-y sm:divide-gray-200">
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Date of Entry
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            2021-11-04
          </dd>
        </div>
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Reference No.
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            GF-1239
          </dd>
        </div>
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Office
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            MMO - Personal Staff
          </dd>
        </div>
        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Description
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            HIRING OF VEHICLE FOR ACTIVITIES, FREIGHT AND HANDLING ACTIVITIES OF THE MUNICIPALITY OF QUEZON
          </dd>
        </div>

        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Particulars
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            Transportation and Communications Services
          </dd>
        </div>

        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Document Created By
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            Neil Darwin Cadampog, Municipal Budget Office
          </dd>
        </div>

        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Currently Assigned To
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            Rhea Jill Palahang, Municipal Mayor's Office
          </dd>
        </div>

        <div class="py-4 sm:py-5 sm:grid sm:grid-cols-3 sm:gap-4 sm:px-6">
          <dt class="text-sm font-medium text-gray-500">
            Approved Budget for the Contract (ABC)
          </dt>
          <dd class="mt-1 text-sm text-gray-900 sm:mt-0 sm:col-span-2">
            70,000.00
          </dd>
        </div>
      </dl>
    </div>
  </div>




  <!-- This example requires Tailwind CSS v2.0+ -->
  <div class="bg-white shadow overflow-hidden sm:rounded-lg my-5">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Date of Endorsement
      </h3>
    </div>
    <div class="border-t px-4 pb-8  border-gray-200">
      <div>
        <div class="mt-6 grid grid-cols-1 gap-y-6 gap-x-4 sm:grid-cols-6">
          <div class="sm:col-span-3">
            <label for="date" class="block text-sm font-medium text-gray-700">
              Date of Endorsement
            </label>
            <div class="mt-1">
              <input type="date" name="date" id="date" autocomplete="given-date" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="recievingoffice" class="block text-sm font-medium text-gray-700">
              Receiving Office
            </label>
            <div class="mt-1">
              <select id="recievingoffice" name="recievingoffice" class="mt-1 block w-full pl-3 pr-10 py-2 text-base border-gray-300 focus:outline-none focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm rounded-md">
                <option>Select Office</option>
                <option selected>Municipal Budget Office</option>
                <option>Municipal Mayor's Office</option>
              </select>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="Endorsementstatus" class="block text-sm font-medium text-gray-700">
              Endorsement Status
            </label>
            <div class="mt-1">
              <select id="Endorsementstatus" name="Endorsementstatus" autocomplete="Endorsementstatus-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option>Select Status</option>
                <option>Endorse Document</option>
                <option>Cancel Document</option>
              </select>
            </div>
          </div>

          <div class="sm:col-span-3">
            <label for="Endorsementstatus" class="block text-sm font-medium text-gray-700">
              Receiving Staff
            </label>
            <div class="mt-1">
              <select id="Endorsementstatus" name="Endorsementstatus" autocomplete="Endorsementstatus-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option>Select Staff</option>
                <option>MIS - Ivan Nacion</option>
                <option>MIS - Jayson Alanano</option>
              </select>
            </div>
          </div>

          <div class="sm:col-span-6">
            <label for="attachment" class="block text-sm font-medium text-gray-700">
              Attachments
            </label>
            <div class="mt-1">
              <select id="attachment" name="attachment" autocomplete="attachment-name" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md">
                <option>Select Attachments</option>
                <option>General Payroll</option>
                <option>Overtime Order</option>
              </select>
            </div>
          </div>

        </div>
      </div>
    </div>
  </div>



  <div class="bg-white shadow overflow-hidden sm:rounded-lg my-5">
    <div class="px-4 py-5 sm:px-6">
      <h3 class="text-lg leading-6 font-medium text-gray-900">
        Document Update
      </h3>
    </div>
    <div class="border-t py-5 px-4 pb-8  border-gray-200">

      <form action="#">
        <div>
          <div class="flex items-center" aria-orientation="horizontal" role="tablist">
            <!-- Selected: "text-gray-900 bg-gray-100 hover:bg-gray-200", Not Selected: "text-gray-500 hover:text-gray-900 bg-white hover:bg-gray-100" -->
            <button id="tabs-1-tab-1" class="text-gray-500 hover:text-gray-900 bg-white hover:bg-gray-100 px-3 py-1.5 border border-transparent text-sm font-medium rounded-md" aria-controls="tabs-1-panel-1" role="tab" type="button">Write</button>
            <!-- Selected: "text-gray-900 bg-gray-100 hover:bg-gray-200", Not Selected: "text-gray-500 hover:text-gray-900 bg-white hover:bg-gray-100" -->
            <button id="tabs-1-tab-2" class="text-gray-500 hover:text-gray-900 bg-white hover:bg-gray-100 ml-2 px-3 py-1.5 border border-transparent text-sm font-medium rounded-md" aria-controls="tabs-1-panel-2" role="tab" type="button">Preview</button>

            <!-- These buttons are here simply as examples and don't actually do anything. -->
            <div class="ml-auto flex items-center space-x-5">
              <div class="flex items-center">
                <button type="button" class="-m-2.5 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Insert link</span>
                  <!-- Heroicon name: solid/link -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.586 4.586a2 2 0 112.828 2.828l-3 3a2 2 0 01-2.828 0 1 1 0 00-1.414 1.414 4 4 0 005.656 0l3-3a4 4 0 00-5.656-5.656l-1.5 1.5a1 1 0 101.414 1.414l1.5-1.5zm-5 5a2 2 0 012.828 0 1 1 0 101.414-1.414 4 4 0 00-5.656 0l-3 3a4 4 0 105.656 5.656l1.5-1.5a1 1 0 10-1.414-1.414l-1.5 1.5a2 2 0 11-2.828-2.828l3-3z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <div class="flex items-center">
                <button type="button" class="-m-2.5 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Insert code</span>
                  <!-- Heroicon name: solid/code -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M12.316 3.051a1 1 0 01.633 1.265l-4 12a1 1 0 11-1.898-.632l4-12a1 1 0 011.265-.633zM5.707 6.293a1 1 0 010 1.414L3.414 10l2.293 2.293a1 1 0 11-1.414 1.414l-3-3a1 1 0 010-1.414l3-3a1 1 0 011.414 0zm8.586 0a1 1 0 011.414 0l3 3a1 1 0 010 1.414l-3 3a1 1 0 11-1.414-1.414L16.586 10l-2.293-2.293a1 1 0 010-1.414z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
              <div class="flex items-center">
                <button type="button" class="-m-2.5 w-10 h-10 rounded-full inline-flex items-center justify-center text-gray-400 hover:text-gray-500">
                  <span class="sr-only">Mention someone</span>
                  <!-- Heroicon name: solid/at-symbol -->
                  <svg class="h-5 w-5" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20" fill="currentColor" aria-hidden="true">
                    <path fill-rule="evenodd" d="M14.243 5.757a6 6 0 10-.986 9.284 1 1 0 111.087 1.678A8 8 0 1118 10a3 3 0 01-4.8 2.401A4 4 0 1114 10a1 1 0 102 0c0-1.537-.586-3.07-1.757-4.243zM12 10a2 2 0 10-4 0 2 2 0 004 0z" clip-rule="evenodd" />
                  </svg>
                </button>
              </div>
            </div>
          </div>
          <div class="mt-2">
            <div id="tabs-1-panel-1" class="p-0.5 -m-0.5 rounded-lg" aria-labelledby="tabs-1-tab-1" role="tabpanel" tabindex="0">
              <label for="comment" class="sr-only">Comment</label>
              <div>
                <textarea rows="5" name="comment" id="comment" style="height: 200px !important" class="shadow-sm focus:ring-indigo-500 focus:border-indigo-500 block w-full sm:text-sm border-gray-300 rounded-md" placeholder="Example: Check for Mayor's Signature, For Approval, For Attachment of Supporting DocumentsFor Award, For BAC Meeting (Mode of Procurement),For Canvassing, For Disbursement and Completion of Voucher,For Journal Entry Voucher, For Mayor's Approval (NOA of Summary of Price Quotation), For Mayor's Signature .etc"></textarea>
              </div>
            </div>

          </div>
        </div>
        <div class="mt-2 flex justify-end">
          <button type="button" class="inline-flex items-center mr-2 px-4 py-2 border border-gray-300 shadow-sm text-sm font-medium rounded-md text-gray-700 bg-white hover:bg-gray-50 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Cancel
          </button>
          <button type="submit" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
            Submit
          </button>
        </div>
      </form>

    </div>
  </div>

</div>