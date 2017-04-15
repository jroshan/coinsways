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
    public class PaymentModeController : Controller
    {
        private CoinswaysDbEntities db = new CoinswaysDbEntities();

        // GET: /Admin/PaymentMode/
        public ActionResult Index()
        {
            return View(db.PaymentModes.ToList());
        }

        // GET: /Admin/PaymentMode/Details/5
        public ActionResult Details(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            PaymentMode paymentmode = db.PaymentModes.Find(id);
            if (paymentmode == null)
            {
                return HttpNotFound();
            }
            return View(paymentmode);
        }

        // GET: /Admin/PaymentMode/Create
        public ActionResult Create()
        {
            return View();
        }

        // POST: /Admin/PaymentMode/Create
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Create([Bind(Include="Id,Name,IsActive")] PaymentMode paymentmode)
        {
            if (ModelState.IsValid)
            {
                db.PaymentModes.Add(paymentmode);
                db.SaveChanges();
                return RedirectToAction("Index");
            }

            return View(paymentmode);
        }

        // GET: /Admin/PaymentMode/Edit/5
        public ActionResult Edit(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            PaymentMode paymentmode = db.PaymentModes.Find(id);
            if (paymentmode == null)
            {
                return HttpNotFound();
            }
            return View(paymentmode);
        }

        // POST: /Admin/PaymentMode/Edit/5
        // To protect from overposting attacks, please enable the specific properties you want to bind to, for 
        // more details see http://go.microsoft.com/fwlink/?LinkId=317598.
        [HttpPost]
        [ValidateAntiForgeryToken]
        public ActionResult Edit([Bind(Include="Id,Name,IsActive")] PaymentMode paymentmode)
        {
            if (ModelState.IsValid)
            {
                db.Entry(paymentmode).State = EntityState.Modified;
                db.SaveChanges();
                return RedirectToAction("Index");
            }
            return View(paymentmode);
        }

        // GET: /Admin/PaymentMode/Delete/5
        public ActionResult Delete(int? id)
        {
            if (id == null)
            {
                return new HttpStatusCodeResult(HttpStatusCode.BadRequest);
            }
            PaymentMode paymentmode = db.PaymentModes.Find(id);
            if (paymentmode == null)
            {
                return HttpNotFound();
            }
            return View(paymentmode);
        }

        // POST: /Admin/PaymentMode/Delete/5
        [HttpPost, ActionName("Delete")]
        [ValidateAntiForgeryToken]
        public ActionResult DeleteConfirmed(int id)
        {
            PaymentMode paymentmode = db.PaymentModes.Find(id);
            db.PaymentModes.Remove(paymentmode);
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
