<template>
  <div class="row">
    <div class="col-md-12">
      <div class="card card-body">
        <form action="" v-on:submit.prevent="onSubmit">
          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Customer Type:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    id="sub_type1"
                    name="sub_type"
                    class="form-check-input"
                    type="radio"
                    value="business"
                    v-model="sub_type"
                  />
                  <label class="form-check-label" for="sub_type1"
                    >Business</label
                  >
                </div>
                <div class="form-check form-check-inline">
                  <input
                    id="sub_type2"
                    name="sub_type"
                    class="form-check-input"
                    type="radio"
                    value="individual"
                    v-model="sub_type"
                  />
                  <label class="form-check-label" for="sub_type2"
                    >Individual</label
                  >
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Primary Contact:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <select
                    name="salutation"
                    id=""
                    class="form-control form-control-sm"
                    v-model="salutation"
                  >
                    <option value="Mr.">Mr.</option>
                    <option value="Mrs.">Mrs.</option>
                    <option value="Ms.">Ms.</option>
                    <option value="Miss.">Miss.</option>
                    <option value="Dr.">Dr.</option>
                  </select>
                </div>
                <div class="form-check form-check-inline">
                  <input
                    name="firstname"
                    class="form-control form-control-sm"
                    type="text"
                    placeholder="First Name"
                    v-model="firstname"
                  />
                </div>
                <div class="form-check form-check-inline">
                  <input
                    name="lastname"
                    class="form-control form-control-sm"
                    type="text"
                    placeholder="Last Name"
                    v-model="lastname"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Company Name:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    name="company_name"
                    class="form-control form-control-sm"
                    type="text"
                    v-model="company_name"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2 mandatory">Customer Display Name: *</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    name="company_display_name"
                    class="form-control form-control-sm"
                    type="text"
                    v-model="company_display_name"
                    required
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Customer Email:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    name="email"
                    class="form-control form-control-sm"
                    type="email"
                    v-model="email"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Customer Phone:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    name="phone"
                    class="form-control form-control-sm"
                    type="text"
                    placeholder="work phone"
                    v-model="phone"
                  />
                </div>
                <div class="form-check form-check-inline">
                  <input
                    name="mobilephone"
                    class="form-control form-control-sm"
                    type="text"
                    placeholder="mobile"
                    v-model="mobilephone"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Skype Identity:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <div class="input-group-prepend">
                    <span class="input-group-text form-control-sm">
                      <i class="fab fa-skype"></i>
                    </span>
                  </div>
                  <input
                    name="skype"
                    class="form-control form-control-sm"
                    type="text"
                    v-model="skype"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Designation:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    name="designation"
                    class="form-control form-control-sm"
                    type="text"
                    v-model="designation"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Department:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    name="department"
                    class="form-control form-control-sm"
                    type="text"
                    v-model="department"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Website:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    name="website"
                    class="form-control form-control-sm"
                    type="text"
                    v-model="website"
                  />
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Note:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <textarea
                    name="note"
                    id=""
                    cols="30"
                    rows="3"
                    class="form-control form-control-sm"
                    v-model="note"
                  ></textarea>
                </div>
              </div>
            </div>
          </div>

          <div class="form-group">
            <div class="row">
              <div class="col-md-2">Status:</div>
              <div class="col-md-10">
                <div class="form-check form-check-inline">
                  <input
                    id="status1"
                    name="status"
                    class="form-check-input"
                    type="radio"
                    value="Active"
                    v-model="status"
                  />
                  <label class="form-check-label" for="status1">Active</label>
                </div>
                <div class="form-check form-check-inline">
                  <input
                    id="status2"
                    name="status"
                    class="form-check-input"
                    type="radio"
                    value="InActive"
                    v-model="status"
                  />
                  <label class="form-check-label" for="status2">InActive</label>
                </div>
              </div>
            </div>
          </div>

          <div>
            <b-tabs content-class="mt-3">
              <b-tab title="Other details" active>
                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2">Currency:</div>
                    <div class="col-md-10">
                      <div class="form-check form-check-inline">
                        <select
                          name="currency"
                          id=""
                          class="form-control form-control-sm"
                          v-model="currency"
                        >
                          <option value="USD">
                            USD - United States Dollar
                          </option>
                          <option value="USD">
                            USD - United States Dollar
                          </option>
                          <option value="USD">
                            USD - United States Dollar
                          </option>
                          <option value="USD">
                            USD - United States Dollar
                          </option>
                          <option value="USD">
                            USD - United States Dollar
                          </option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2">Payment Terms:</div>
                    <div class="col-md-10">
                      <div class="form-check form-check-inline">
                        <select
                          name="payment_term"
                          id=""
                          class="form-control form-control-sm"
                          v-model="payment_term"
                        >
                          <option value="Net 15">Net 15</option>
                          <option value="Net 30">Net 30</option>
                        </select>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2">Credit Limit:</div>
                    <div class="col-md-10">
                      <div class="form-check form-check-inline">
                        <input
                          name="credit_limit"
                          class="form-control form-control-sm"
                          type="number"
                          min="0"
                          v-model="credit_limit"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2">Facebook:</div>
                    <div class="col-md-10">
                      <div class="form-check form-check-inline">
                        <div class="input-group-prepend">
                          <span class="input-group-text form-control-sm">
                            <i class="fab fa-facebook"></i>
                          </span>
                        </div>
                        <input
                          name="facebook"
                          class="form-control form-control-sm"
                          type="text"
                          v-model="facebook"
                        />
                      </div>
                    </div>
                  </div>
                </div>

                <div class="form-group">
                  <div class="row">
                    <div class="col-md-2">Twitter:</div>
                    <div class="col-md-10">
                      <div class="form-check form-check-inline">
                        <div class="input-group-prepend">
                          <span class="input-group-text form-control-sm">
                            <i class="fab fa-twitter"></i>
                          </span>
                        </div>
                        <input
                          name="twitter"
                          class="form-control form-control-sm"
                          type="text"
                          v-model="twitter"
                        />
                      </div>
                    </div>
                  </div>
                </div>
              </b-tab>
              <b-tab title="Address">
                <div class="row">
                  <div class="col-md-6">
                    <h6>Biliing Address</h6>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Attention:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="b_attention"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="b_attention"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Country / Region:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <select
                              name="b_country"
                              id=""
                              class="form-control form-control-sm"
                              v-model="b_country"
                            >
                              <option value="">US</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Address:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="b_address"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="b_address"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">City:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="b_city"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="b_city"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">State:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="b_state"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="b_state"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Zip Code:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="b_code"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="b_code"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Phone:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="b_phone"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="b_phone"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Fax:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="b_fax"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="b_fax"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <h6>Shipping Address</h6>
                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Attention:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="s_attention"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="s_attention"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Country / Region:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <select
                              name="s_country"
                              id=""
                              class="form-control form-control-sm"
                              v-model="s_country"
                            >
                              <option value="">US</option>
                            </select>
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Address:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="s_address"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="s_address"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">City:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="s_city"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="s_city"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">State:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="s_state"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="s_state"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Zip Code:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="s_code"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="s_code"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Phone:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="s_phone"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="s_phone"
                            />
                          </div>
                        </div>
                      </div>
                    </div>

                    <div class="form-group">
                      <div class="row">
                        <div class="col-md-2">Fax:</div>
                        <div class="col-md-10">
                          <div class="form-check form-check-inline">
                            <input
                              name="s_fax"
                              class="form-control form-control-sm"
                              type="text"
                              v-model="s_fax"
                            />
                          </div>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </b-tab>
            </b-tabs>

            <button type="submit" class="btn btn-primary btn-sm">Save</button>
          </div>
        </form>
      </div>
    </div>
  </div>
</template>

<script>
export default {
  data: function () {
    return {
      sub_type: "business",
      salutation: "Mr.",
      firstname: "",
      lastname: "",
      company_name: "",
      company_display_name: "",
      email: "",
      phone: "",
      mobilephone: "",
      skype: "",
      designation: "",
      department: "",
      website: "",
      note: "",
      status: "Active",
      currency: "USD",
      payment_term: "",
      credit_limit: "",
      facebook: "",
      twitter: "",
      b_attention: "",
      b_country: "",
      b_address: "",
      b_city: "",
      b_state: "",
      b_code: "",
      b_phone: "",
      b_fax: "",
      s_attention: "",
      s_country: "",
      s_address: "",
      s_city: "",
      s_state: "",
      s_code: "",
      s_phone: "",
      s_fax: "",
    };
  },
  mounted() {
    console.log("Component mounted.");
  },
  methods: {
    onSubmit(event) {
      const _this = this
      const url = "/customers";
      const params = JSON.parse(JSON.stringify(this._data));
      console.log(params);
      this.axios.post(url, params).then((response) => {
        _this.makeToast('success', 'New customer created.')
        event.target.reset();
      });
    },

    makeToast(variant = null, message) {
      this.$bvToast.toast(message, {
        title: `${variant}`,
        variant: variant,
        solid: true,
      });
    },
  },
};
</script>
