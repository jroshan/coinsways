using System;
using System.Collections.Generic;
using System.Data;
using System.Data.Entity;
using System.Linq;
using System.Net;
using System.Web;
using System.Web.Mvc;
using Coinsways.Entities;

namespace Coinsways.Areas.Admin.Controllers
{
    public class CurrencyCodeController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/CurrencyCode/
        public ActionResult Index()
        {
            return View(db.CurrencyCodes.ToList());
        }

        // GET: /Admin/CurrencyCode/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            CurrencyCode currencycode = db.CurrencyCodes.Find(id);
            if (currencycode == null)
            {
                return HttpNotFound();
            }
            return View(currencycode);
        }

        // GET: /Admin/CurrencyCode/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/CurrencyCode/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="Id,CurrencyCode1,Details,IsActive")] CurrencyCode currencycode)
        {
            if (ModelState.IsValid)
            {
                db.CurrencyCodes.Add(currencycode);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(currencycode);
        }

        // GET: /Admin/CurrencyCode/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            CurrencyCode currencycode = db.CurrencyCodes.Find(id);
            if (currencycode == null)
            {
                return HttpNotFound();
            }
            return View(currencycode);
        }

        // POST: /Admin/CurrencyCode/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="Id,CurrencyCode1,Details,IsActive")] CurrencyCode currencycode)
        {
            if (ModelState.IsValid)
            {
                db.Entry(currencycode).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(currencycode);
        }

        // GET: /Admin/CurrencyCode/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            CurrencyCode currencycode = db.CurrencyCodes.Find(id);
            if (currencycode == null)
            {
                return HttpNotFound();
            }
            return View(currencycode);
        }

        // POST: /Admin/CurrencyCode/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            CurrencyCode currencycode = db.CurrencyCodes.Find(id);
            db.CurrencyCodes.Remove(currencycode);
            db.SaveChanges();
            return RedirectToAction("Index");
        }

        protected override void Dispose(bool disposing)
        {
            if (disposing)
            {
                db.Dispose();
            }
            base.Dispose(disposing);
        }
    }
}
